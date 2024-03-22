<?php

namespace app\models;

class ShoesForm extends \yii\base\Model
{
    public $name;
    public $label_id;
    public $type_id;
    public $gender_id;
    public $start_size;
    public $end_size;
    public $season_id;
    public $cost;
    public $images;
    public $description;
    public function rules(){
        return [
            [['name','label_id','type_id','gender_id','start_size','end_size','season_id','cost'],'required' ],
            ['description','string']
        ];
    }

}