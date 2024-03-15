<?php

use yii\bootstrap4\ActiveForm;

$range = [];
foreach ( range($shoes->start_size, $shoes->end_size) as $size) {
    $range [$size] = $size;
}
?>
<?php $form = ActiveForm::begin(); ?>

    <h1><?=$shoes -> name ?></h1>
    <h3><?=$shoes ->cost?>₽</h3>

<?=$form->field($model, 'size')->dropdownList($range)->label('Размер(Европейский)') ?>


    <h5><?=$shoes ->gender -> name?></h5>
    <h6><?=$shoes ->season -> name?></h6>
<!--    <a href="/shop/shoes?shoes_id=--><?php //=$shoe->id?><!--">В корзину</a>-->
    <?=\yii\helpers\Html::submitButton('В корзину') ?>




<?php ActiveForm::end(); ?>
