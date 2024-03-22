<?php
//var_dump($order);
//var_dump($order->orderToShoes);

?>

<?php foreach ($order->orderToShoes as $shoes ):?>
    <div class="col gy-5">
        <div class="card" style="width: 20rem;">
            <img src="/shop/image?shoes_id=<?=$shoes->shoes_id ?>&num=1" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$shoes->shoes -> name ?></h5>
                <p class="card-text"><?=$shoes->shoes -> description ?></p>
                <hr>
                <h3><?=$shoes->shoes->cost?>₽</h3>
                <h3>Размер:<?=$shoes->size?></h3>


            </div>
        </div>
    </div>
<?php endforeach;?>
<a href="/order/buy">Купить</a>