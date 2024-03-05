<?php

use yii\db\Migration;

/**
 * Class m240301_153855_clothes
 */
class m240301_153855_clothes extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('shoes', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'label_id' => $this->integer()->notNull(),
            'type_id' => $this->integer()->notNull(),
            'gender_id' => $this->integer()->notNull(),
            'start_size' => $this->integer()->notNull(),
            'end_size' => $this->integer()->notNull(),
            'season_id' => $this->integer()->notNull(),
            'cost' => $this->float()->notNull(),

        ]);







        $this->createTable('dir_gender', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
        ]);
        $this->insert('dir_gender', ['name' => 'Мужчины',]);
        $this->insert('dir_gender', ['name' => 'Женщины',]);
        $this->insert('dir_gender', ['name' => 'Унисекс',]);

        $this->addForeignKey(
            'shoes_to_gender_fk',
            'shoes',
            'gender_id',
            'dir_gender',
            'id',
            'CASCADE',
            'CASCADE'
        );







        $this->createTable('dir_season', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
        ]);
        $this->insert('dir_season', ['name' => 'Зима',]);
        $this->insert('dir_season', ['name' => 'Весна',]);
        $this->insert('dir_season', ['name' => 'Лето',]);
        $this->insert('dir_season', ['name' => 'Осень',]);

        $this->addForeignKey(
            'shoes_to_season_fk',
            'shoes',
            'season_id',
            'dir_season',
            'id',
            'CASCADE',
            'CASCADE'
        );








        $this->createTable('dir_label', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
        ]);

        $this->insert('dir_label', ['name' => 'ADIDAS',]);
        $this->insert('dir_label', ['name' => 'ASICS',]);
        $this->insert('dir_label', ['name' => 'BALENCIAGA',]);
        $this->insert('dir_label', ['name' => 'BAPE',]);
        $this->insert('dir_label', ['name' => 'CROCS',]);
        $this->insert('dir_label', ['name' => 'MMY',]);

        $this->addForeignKey(
            'shoes_to_label_fk',
            'shoes',
            'label_id',
            'dir_label',
            'id',
            'CASCADE',
            'CASCADE'
        );






        $this->createTable('dir_type', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
        ]);

        $this->insert('dir_type', ['name' => 'Кроссовки и кеды',]);
        $this->insert('dir_type', ['name' => 'Ботинки',]);
        $this->insert('dir_type', ['name' => 'Шлепанцы',]);
        $this->insert('dir_type', ['name' => 'Сапоги',]);

        $this->addForeignKey(
            'shoes_to_type_fk',
            'shoes',
            'type_id',
            'dir_type',
            'id',
            'CASCADE',
            'CASCADE'
        );








        $this->createTable('users', [
            'id' => $this->primaryKey(),
            'email' => $this->string(100)->unique()->notNull(),
            'password' => $this->string(250)->notNull(),
        ]);
        $this->insert('users', [
            'email' => 'admin@admin.admin',
            'password' => password_hash('admin',PASSWORD_DEFAULT)
        ]);








        $this->createTable('order', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'ispaid' => $this->boolean()->defaultValue(false),
            'data_ispaid' => $this->dateTime()->defaultExpression('NOW()')

        ]);
        $this->addForeignKey(
            'order_to_users_fk',
            'order',
            'user_id',
            'users',
            'id',
            'CASCADE',
            'CASCADE'
        );






        $this->createTable('order_to_shoes', [
            'shoes_id' => $this->integer()->notNull(),
            'order_id' => $this->integer()->notNull(),
            'size' => $this->integer()->notNull(),

        ]);
        $this->addForeignKey(
            'order_to_shoes_fk',
            'order_to_shoes',
            'shoes_id',
            'shoes',
            'id',
            'CASCADE',
            'CASCADE'
        );
        $this->addForeignKey(
            'shoes_to_order_fk',
            'order_to_shoes',
            'order_id',
            'order',
            'id',
            'CASCADE',
            'CASCADE'
        );




















    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240301_153855_clothes cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240301_153855_clothes cannot be reverted.\n";

        return false;
    }
    */
}
