<?php

namespace app\repository;

use app\entity\Order;
use app\entity\OrderToShoes;

class OrderRepository

{
    public static function getOrderById($order_id){
        return Order::find() -> where(['id'=>$order_id])->one();
    }

    public static function getOrder($user_id){
        $order = Order::find() -> where(['user_id'=>$user_id,'ispaid'=>false])->one();
        if (empty($order)){
            $order = new Order();
            $order -> user_id = $user_id;

            $order -> save();

        }
        return $order;
    }

    public static function addToOrder($order_id,$shoes_id,$size){
        $btt = new OrderToShoes();
        $btt -> shoes_id = $shoes_id;
        $btt -> size = $size;
        $btt -> order_id = $order_id;
        $btt -> save();
    }
    public static function payOrder($order_id){
        $order = self::getOrderById($order_id);
        $order -> data_ispaid = date('Y-m-d H:i:s');
        $order -> save();
    }
}
