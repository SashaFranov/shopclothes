<?php
//var_dump($order);
//var_dump($order->orderToShoes);

?>

<?php foreach ($order->orderToShoes as $shoes ):?>
    <div class="col gy-5">
        <div class="card" style="width: 20rem;">
            <img src="/images/catalog/img.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$shoes->shoes -> name ?></h5>
                <p class="card-text">Преимущественно персонажа берут на сложную линии как хардлайнера или
                    полу-саппорта. Эффективнее всего проявляет себя в середине игры..</p>
                <hr>
                <h3><?=$shoes->shoes->cost?></h3>
                <h3><?=$shoes->size?></h3>


            </div>
        </div>
    </div>
<?php endforeach;?>
<a href="/order/buy">Купить</a>