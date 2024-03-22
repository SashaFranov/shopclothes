<?php

namespace app\controllers;


use app\models\ShoesBuyForm;
use app\models\ShoesForm;
use app\repository\DirRepository;
use app\repository\OrderRepository;
use app\repository\ShoesRepository;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\UploadedFile;

class ShopController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create-shoes'],
                'rules' => [
                    [
                        'actions' => ['create-shoes'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                ],
            ],

        ];
    }

    public function actionCatalog()
    {
        $shoes = ShoesRepository::getShoes();
        return $this->render('catalog', ['shoes' => $shoes]);
    }

    public function actionShoes($shoes_id)
    {
        $model = new ShoesBuyForm();
        $shoes = ShoesRepository::getShoesById($shoes_id);
        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            $order = OrderRepository::getOrder(\Yii::$app->user->id);
            OrderRepository::addToOrder($order->id,$shoes_id,$model->size);
            return $this->redirect('/order');
        }
        return $this->render('shoes', ['shoes' => $shoes, 'model' => $model]);
    }

    public function actionCreateShoes(){
        $model = new ShoesForm();
        if($model->load(\Yii::$app->request->post())){
            $model->images=UploadedFile::getInstances($model,'images');
            if($model->validate()){

                $shoes_id = ShoesRepository::createShoes(
                    $model->name,
                    $model->label_id,
                    $model->type_id,
                    $model->gender_id,
                    $model->start_size,
                    $model->end_size,
                    $model->cost,
                    $model->season_id,
                    $model->description
                );
                $alias = \Yii::getAlias("@app/upload/shoes/{$shoes_id}");

                if (!is_dir($alias)) {

                    mkdir($alias, 777, true);
                }
                array_map("unlink",glob("$alias/*"));
                $i = 1;
                foreach ($model->images as $image){
                    $image->saveAs("{$alias}/{$i}.{$image->extension}");
                    $i++;
                }
                return $this ->redirect("/shop/shoes?shoes_id={$shoes_id}");

            }
        }
        $labelList = DirRepository::getLabels();
        $labels = [];
        foreach ($labelList as $label){
            $labels[$label -> id] = $label -> name;
        }


        $typeList = DirRepository::getTypes();
        $types = [];
        foreach ($typeList as $type){
            $types[$type -> id] = $type -> name;
        }


        $seasonList = DirRepository::getSeasons();
        $seasons = [];
        foreach ($seasonList as $season){
            $seasons[$season -> id] = $season -> name;
        }


        $genderList = DirRepository::getGenders();
        $genders = [];
        foreach ($genderList as $gender){
            $genders[$gender -> id] = $gender -> name;
        }


        return $this->render('createShoes',[
            'model'=>$model,'labels'=>$labels,
            'types'=>$types,'seasons'=>$seasons,'genders'=>$genders
        ]);
    }

    public function actionImage($shoes_id,$num){
        $alias = \Yii::getAlias("@app/upload/shoes/{$shoes_id}/{$num}");
        $path = glob("$alias.*")[0];
        $file = file_get_contents($path);
        $temp = explode('/',$path);
        $filename = $temp[count($temp)-1];
        \Yii::$app->response->sendContentAsFile($file, $filename, [
            'inline' => true,
            'mimeType' => mime_content_type($path)
        ]);
    }

}