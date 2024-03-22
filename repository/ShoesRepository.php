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

    public static function createShoes(
        $name,
        $label_id,
        $type_id,
        $gender_id,
        $start_size,
        $end_size,
        $cost,
        $season_id,
        $description = null
    ){
        $shoes = new Shoes();
        $shoes->name=$name;
        $shoes->label_id=$label_id;
        $shoes->type_id=$type_id;
        $shoes->gender_id=$gender_id;
        $shoes->start_size=$start_size;
        $shoes->end_size=$end_size;
        $shoes->cost=$cost;
        $shoes->season_id=$season_id;
        $shoes->description=$description;
        $shoes-> save();
        return $shoes ->id;
    }
}