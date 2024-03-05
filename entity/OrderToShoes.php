<?php

namespace app\entity;

use Yii;

/**
 * This is the model class for table "order_to_shoes".
 *
 * @property int $shoes_id
 * @property int $order_id
 *
 * @property Order $order
 * @property Shoes $shoes
 */
class OrderToShoes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_to_shoes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shoes_id', 'order_id'], 'required'],
            [['shoes_id', 'order_id'], 'default', 'value' => null],
            [['shoes_id', 'order_id'], 'integer'],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Order::class, 'targetAttribute' => ['order_id' => 'id']],
            [['shoes_id'], 'exist', 'skipOnError' => true, 'targetClass' => Shoes::class, 'targetAttribute' => ['shoes_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'shoes_id' => 'Shoes ID',
            'order_id' => 'Order ID',
        ];
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::class, ['id' => 'order_id']);
    }

    /**
     * Gets query for [[Shoes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShoes()
    {
        return $this->hasOne(Shoes::class, ['id' => 'shoes_id']);
    }
}
