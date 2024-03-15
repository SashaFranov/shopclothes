<?php

namespace app\controllers;


use app\repository\OrderRepository;

class OrderController extends \yii\web\Controller
{
    public function actionIndex(){
        $order = OrderRepository::getOrder(\Yii::$app->user->id);
        return $this -> render('order',['order'=>$order]);

    }

    public function actionBuy(){
        $order = OrderRepository::getOrder(\Yii::$app->user->id);




        OrderRepository::payOrder($order -> id);

        return $this -> redirect('/order');

    }
}