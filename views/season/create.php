<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\entity\DirSeason $model */

$this->title = 'Create Dir Season';
$this->params['breadcrumbs'][] = ['label' => 'Dir Seasons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dir-season-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
