<?php

use yii\db\Migration;

/**
 * Class m240322_144646_role
 */
class m240322_144646_role extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;
        $admin = $auth->createRole('admin');
        $auth->add($admin);

        $auth->assign($admin, 1);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $auth = Yii::$app->authManager;
        $admin=$auth->getRole('admin');
        $auth->remove($admin);
    }

}
