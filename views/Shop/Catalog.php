<?php

?>



<section class="back">
    <div class="container text-center">
        <div class="row align-items-start">
            <?php foreach ($shoes as $shoe ):?>
            <div class="col gy-5">
                <div class="card" style="width: 20rem;">
                    <img src="/images/catalog/img.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$shoe -> name ?></h5>
                        <p class="card-text">Преимущественно персонажа берут на сложную линии как хардлайнера или
                            полу-саппорта. Эффективнее всего проявляет себя в середине игры..</p>
                        <hr>
                        <h3><?=$shoe ->cost?></h3>
                        <a href="/shop/shoes?shoes_id=<?=$shoe->id?>">Выберите параметры</a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
        <div class="more">
            <a href="#" class="link-dark"><strong>more</strong></a>
        </div>
    </div>
</section>

