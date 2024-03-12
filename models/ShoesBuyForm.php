<?php

namespace app\models;

class ShoesBuyForm extends \yii\base\Model
{
    public $size;
    public function rules(){
        return [
            ['size','required' ]
        ];
    }

}