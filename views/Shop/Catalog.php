<?php

?>
<?php foreach ($shoes as $shoe ):?>
<h1><?=$shoe -> name ?></h1>
    <h3><?=$shoe ->cost?></h3>
    <a href="/shop/shoes?shoes_id=<?=$shoe->id?>">Выберите параметры</a>
<?php endforeach;?>
