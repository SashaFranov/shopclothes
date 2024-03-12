<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\entity\DirSeason $model */

$this->title = 'Update Dir Season: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Dir Seasons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dir-season-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
