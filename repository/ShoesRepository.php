<?php

namespace app\repository;

use app\entity\Shoes;

class ShoesRepository
{
    public static function getShoes(){
        return Shoes::find()->all();
    }
    public static function getShoesById($shoes_id){
        return Shoes::find()->where(['id' => $shoes_id]) -> one();

    }
}