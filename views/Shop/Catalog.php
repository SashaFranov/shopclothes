<!---->
<?php //if (Yii::$app->user->can('admin')):?>
<!--<a href="/shop/create-shoes">Создать позицию</a>-->
<?php //endif;?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/images/about/Скриншот-25-03-2024 12_10_54.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="/images/about/Скриншот-25-03-2024 11_57_38.jpg" class="d-block w-100" alt="...">
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Предыдущий</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Следующий</span>
    </button>
</div>




<!--style="margin-top: 100px-->
<section class="about_us" ">
    <div class="container-xxl">
        <div class="row">
            <div class="about">
                <h1><strong>О НАШЕМ ПРОЕКТЕ</strong></h1>
                <img src="separator.png" alt="">
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h5>На рынке более 5 лет</h5>
                <p>Многолетний опыт,большой ассортимент, лучшее качество. </p>
            </div>
            <div class="col">
                <h5>Множество положительных отзывов <span><i class="fa fa-long-arrow-right"></i></span>
                </h5>
                <p>У каждого клиента есть возможность выразить своё мнение о нашем проекте. С отзывами вы можете ознакомиться в нашем
                телеграмм канале.</p>
            </div>
            <div class="col">
                <h5>
                    Оперативная доставка<span><i class="fa fa-long-arrow-right"></i></span></h5>
                <p>Мы строго придерживаемся установленных планов и сроков исполнения.</p>
            </div>
        </div>
    </div>
</section>


<section class="back" >
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

<?php if (Yii::$app->user->can('admin')):?>
    <a href="/shop/create-shoes">Создать позицию</a>
<?php endif;?>






<section class="our_skills">
    <div class="container-xxl ">
        <div class="our_skill">
            <div class="heading-content text-center">
                <h1><strong>Бренды с которыми мы сотрудничаем</strong></h1>
                <img src="separator.png" alt="">
            </div>
        </div>

        <div class="row">
            <div class="skills-wrapper">
                <div class="col-sm-6 col-xs-12">
                    <div class="skills-content">

                    </div>
                </div>


                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="skillbar">
                        <div class="skillbar-title">
                            <h3 class="blue">NIKE</h3>
                        </div>
                    </div>

                    <div class="skillbar_1">
                        <div class="skillbar-title">
                            <h3 class="blue">ADIDAS</h3>
                        </div>
                    </div>

                    <div class="skillbar_2">
                        <div class="skillbar-title">
                            <h3 class="blue">MAISON MIHARA YASUHIRO</h3>
                        </div>
                    </div>

                    <div class="skillbar_3">
                        <div class="skillbar-title">
                            <h3 class="blue">ASICS</h3>
                        </div>
                    </div>

                    <div class="skillbar_4">
                        <div class="skillbar-title">
                            <h3 class="blue">BALENCIAGA</h3>
                        </div>
                    </div>

                    <div class="skillbar_5">
                        <div class="skillbar-title">
                            <h3 class="blue">CROCS</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!--<section class="thank_you">-->
<!---->
<!--    <div class="container-fluid text-center">-->
<!--        <div class="why_shoose_us">-->
<!--            <div class="heading-content text-center">-->
<!--                <h1><strong>Thank YOU!</strong></h1>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="container overflow-hidden text-center">-->
<!--            <div class="mb-5">-->
<!--                <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="name">-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="container overflow-hidden text-center">-->
<!--            <div class="mb-5">-->
<!--                <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="e-mail">-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="container overflow-hidden text-center">-->
<!--            <div class="mb-5">-->
<!--                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="massage"></textarea>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="more">-->
<!--            <a href="#" class="link-dark"><strong>send</strong></a>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</section>-->




    <section style="border: 0">
        <div class="container-fluid" >
            <div class="why_shoose_us">
                <div class="heading-content text-center">
                    <h1><strong>Скидки за подписку на социальные сети<br>
                            (скидки суммируются) </strong></h1>
                    <img src="separator.png" alt="">
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="col">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/images/social/vk.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Вконтакте</h5>
                                <p class="card-text">Получите скидку в 1% к заказу за подписку на нашу группу:
                                    https://vk.com/paperplaneshipping?from=search</p>
                                <p class="card-text"><small class="text-muted">Последний пост 7 мин. назад</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/images/social/Instagram.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Instagram</h5>
                                <p class="card-text">Получите скидку в 2% к заказу за подписку на наш Instagram:
                                    aaakicks
                                </p>
                                <p class="card-text"><small class="text-muted">Последний пост 3 мин. назад</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/images/social/facebook.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Facebook</h5>
                                <p class="card-text">Получите скидку в 0,5% к заказу за подписку на наш Facebook:
                                    aaakicks.</p>
                                <p class="card-text"><small class="text-muted">Последний пост 9 мин. назад</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/images/social/Одноклассники.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body_1">
                                <h5 class="card-title">Одноклассники</h5>
                                <p class="card-text">Получите скидку в 0,5% к заказу за подписку на наши Одноклассники:
                                    aaakicks.</p>
                                <p class="card-text"><small class="text-muted">Последний пост 5 мин. назад</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




<section class="contact_us">

    <div class="container-xxl">
        <div class="row">
            <div class="contact_u">
                <h1><strong>Наши контакты</strong></h1>

            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col">

                <p class="down">Всегда будем рады услышать ваше мнение или прийти на помощь</p>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col align-self-start">
                <img src="/images/contact/send_FILL0_wght400_GRAD0_opsz48.png" alt="">
                <h5>https://t.me/sasha_franov</h5>
            </div>
            <div class="col align-self-center">
                <img src="/images/contact/home_FILL0_wght400_GRAD0_opsz48.png" alt="">
                <h6>AAAKIKS</h6>
            </div>
            <div class="col align-self-end">
                <img src="/images/contact/phone_enabled_FILL0_wght400_GRAD0_opsz48.png" alt="">
                <h6>+7(960)887-08-60</h6>
            </div>
        </div>
    </div>
</section>