<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\entity\DirLabel $model */

$this->title = 'Create Dir Label';
$this->params['breadcrumbs'][] = ['label' => 'Dir Labels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dir-label-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
