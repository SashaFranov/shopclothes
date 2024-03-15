<?php

namespace app\controllers;


use app\models\ShoesBuyForm;
use app\repository\OrderRepository;
use app\repository\ShoesRepository;
use yii\web\Controller;

class ShopController extends Controller
{
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

}