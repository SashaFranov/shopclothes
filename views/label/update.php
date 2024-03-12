<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\entity\DirLabel $model */

$this->title = 'Update Dir Label: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Dir Labels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dir-label-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
