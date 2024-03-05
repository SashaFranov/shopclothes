<?php

namespace app\entity;

use Yii;

/**
 * This is the model class for table "dir_label".
 *
 * @property int $id
 * @property string $name
 *
 * @property Shoes[] $shoes
 */
class DirLabel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dir_label';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Shoes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShoes()
    {
        return $this->hasMany(Shoes::class, ['label_id' => 'id']);
    }
}
