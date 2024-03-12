<?php

namespace app\controllers;


use app\models\ShoesBuyForm;
use app\repository\ShoesRepository;
use yii\web\Controller;

class ShopController extends Controller
{
    public function actionCatalog(){
        $shoes = ShoesRepository::getShoes();
        return $this->render('catalog',['shoes'=>$shoes]);
    }
    public function actionShoes($shoes_id){
        $model = new ShoesBuyForm();
        $shoes = ShoesRepository::getShoesById($shoes_id);
        return $this->render('shoes',['shoes'=>$shoes, 'model'=>$model]);
    }

}