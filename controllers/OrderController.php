<?php

namespace app\controllers;


use app\repository\OrderRepository;
use yii\filters\AccessControl;

class OrderController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),

                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],

        ];
    }
    public function actionIndex(){
        $order = OrderRepository::getOrder(\Yii::$app->user->id);
        return $this -> render('order',['order'=>$order]);

    }

    public function actionBuy(){
        $order = OrderRepository::getOrder(\Yii::$app->user->id);
        if(count($order->orderToShoes)<1){
            return $this -> redirect("/order");
        }
        OrderRepository::payOrder($order -> id);

        return $this -> redirect("/order/success?order_id={$order->id}");

    }
    public function actionSuccess($order_id){
        return $this ->render('success',['order_id'=>$order_id]);
    }

}