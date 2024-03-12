<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\entity\DirType $model */

$this->title = 'Update Dir Type: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Dir Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dir-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
