<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\entity\DirGender $model */

$this->title = 'Create Dir Gender';
$this->params['breadcrumbs'][] = ['label' => 'Dir Genders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dir-gender-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
