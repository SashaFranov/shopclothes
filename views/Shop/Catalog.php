<?php if (Yii::$app->user->can('admin')):?>
<a href="/shop/create-shoes">Создать позицию</a>
<?php endif;?>

<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/images/about/da15a5d1-1197-44e3-8b36-fba7a8c8dbd8.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/images/about/da15a5d1-1197-44e3-8b36-fba7a8c8dbd8.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/images/about/da15a5d1-1197-44e3-8b36-fba7a8c8dbd8.jpeg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section class="back">
    <div class="container text-center">
        <div class="row align-items-start">
            <?php foreach ($shoes as $shoe ):?>
            <div class="col gy-5">
                <div class="card" style="width: 20rem;">
                    <img src="/shop/image?shoes_id=<?=$shoe->id ?>&num=1" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$shoe -> name ?></h5>
                        <p class="card-text"><?=$shoe -> description ?></p>
                        <hr>
                        <h3><?=$shoe ->cost?>₽</h3>
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

