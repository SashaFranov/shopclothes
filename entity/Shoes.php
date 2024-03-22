<?php

namespace app\entity;

use Yii;

/**
 * This is the model class for table "shoes".
 *
 * @property int $id
 * @property string $name
 * @property int $label_id
 * @property int $type_id
 * @property int $gender_id
 * @property int $start_size
 * @property int $end_size
 * @property int $season_id
 * @property float $cost
 * @property string $description
 *
 * @property DirGender $gender
 * @property DirLabel $label
 * @property OrderToShoes[] $orderToShoes
 * @property DirSeason $season
 * @property DirType $type
 */
class Shoes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shoes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'label_id', 'type_id', 'gender_id', 'start_size', 'end_size', 'season_id', 'cost'], 'required'],
            [['label_id', 'type_id', 'gender_id', 'start_size', 'end_size', 'season_id'], 'default', 'value' => null],
            [['label_id', 'type_id', 'gender_id', 'start_size', 'end_size', 'season_id'], 'integer'],
            [['cost'], 'number'],
            [['name'], 'string', 'max' => 100],
            [['gender_id'], 'exist', 'skipOnError' => true, 'targetClass' => DirGender::class, 'targetAttribute' => ['gender_id' => 'id']],
            [['label_id'], 'exist', 'skipOnError' => true, 'targetClass' => DirLabel::class, 'targetAttribute' => ['label_id' => 'id']],
            [['season_id'], 'exist', 'skipOnError' => true, 'targetClass' => DirSeason::class, 'targetAttribute' => ['season_id' => 'id']],
            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => DirType::class, 'targetAttribute' => ['type_id' => 'id']],
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
            'label_id' => 'Label ID',
            'type_id' => 'Type ID',
            'gender_id' => 'Gender ID',
            'start_size' => 'Start Size',
            'end_size' => 'End Size',
            'season_id' => 'Season ID',
            'cost' => 'Cost',
        ];
    }

    /**
     * Gets query for [[Gender]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGender()
    {
        return $this->hasOne(DirGender::class, ['id' => 'gender_id']);
    }

    /**
     * Gets query for [[Label]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLabel()
    {
        return $this->hasOne(DirLabel::class, ['id' => 'label_id']);
    }

    /**
     * Gets query for [[OrderToShoes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderToShoes()
    {
        return $this->hasMany(OrderToShoes::class, ['shoes_id' => 'id']);
    }

    /**
     * Gets query for [[Season]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSeason()
    {
        return $this->hasOne(DirSeason::class, ['id' => 'season_id']);
    }

    /**
     * Gets query for [[Type]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(DirType::class, ['id' => 'type_id']);
    }
}
