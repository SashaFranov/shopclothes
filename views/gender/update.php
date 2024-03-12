<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\entity\DirGender $model */

$this->title = 'Update Dir Gender: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Dir Genders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dir-gender-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
