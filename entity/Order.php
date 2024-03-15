<?php

namespace app\entity;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int $user_id
 * @property bool|null $ispaid
 * @property string|null $data_ispaid
 *
 * @property OrderToShoes[] $orderToShoes
 * @property Users $user
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['user_id'], 'default', 'value' => null],
            [['user_id'], 'integer'],
            [['ispaid'], 'boolean'],
            [['data_ispaid'], 'default'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'ispaid' => 'Ispaid',
            'data_ispaid' => 'Data Ispaid',
        ];
    }

    /**
     * Gets query for [[OrderToShoes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderToShoes()
    {
        return $this->hasMany(OrderToShoes::class, ['order_id' => 'id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::class, ['id' => 'user_id']);
    }
}
