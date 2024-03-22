<?php

namespace app\repository;

use app\entity\DirGender;
use app\entity\DirLabel;
use app\entity\DirSeason;
use app\entity\DirType;

class DirRepository
{
    public static function getSeasons(){
        return DirSeason::find()->all();

    }
    public static function getTypes(){
        return DirType::find()->all();

    }
    public static function getLabels(){
        return DirLabel::find()->all();

    }
    public static function getGenders(){
        return DirGender::find()->all();

    }

}