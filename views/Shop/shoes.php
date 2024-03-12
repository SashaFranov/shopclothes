<?php

use yii\bootstrap4\ActiveForm;

var_dump($shoes);
?>
<?php $form = ActiveForm::begin(); ?>

    <h1><?=$shoes -> name ?></h1>
    <h3><?=$shoes ->cost?>₽</h3>

<?=$form->field($model, 'size')->dropdownList(range($shoes->start_size, $shoes->end_size))->label('Размер(Европейский)') ?>


    <h5><?=$shoes ->gender -> name?></h5>
    <h6><?=$shoes ->season -> name?></h6>
    <a href="/shop/shoes?shoes_id=<?=$shoe->id?>">В корзину</a>


<?php ActiveForm::end(); ?>
