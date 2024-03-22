<?php

use yii\helpers\Html;
use yii\web\UploadedFile;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ShoesForm $model */
/** @var ActiveForm $form */
/** @var  $labels */
/** @var  $types */
/** @var  $genders */
/** @var  $seasons */
?>
<div class="shop-createShoes">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'label_id')->dropDownList($labels) ?>
        <?= $form->field($model, 'type_id')->dropDownList($types) ?>
        <?= $form->field($model, 'gender_id')->dropDownList($genders) ?>
        <?= $form->field($model, 'start_size')->input('number') ?>
        <?= $form->field($model, 'end_size')->input('number') ?>
        <?= $form->field($model, 'season_id')->dropDownList($seasons) ?>
        <?= $form->field($model, 'cost')->input('number') ?>
        <?= $form->field($model, 'description')->textarea() ?>
        <?= $form->field($model, 'images[]')->fileInput(['multiple' => true, 'accept' => 'image/*','value' => UploadedFile::getInstances($model,'images')])?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- shop-createShoes -->
