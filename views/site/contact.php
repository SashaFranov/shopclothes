<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\captcha\Captcha;

$this->title = 'Contact';

?>

<div class="site-contact ">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        <p>
            Note that if you turn on the Yii debugger, you should be able
            to view the mail message on the mail panel of the debugger.
            <?php if (Yii::$app->mailer->useFileTransport): ?>
                Because the application is in development mode, the email is not sent but saved as
                a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                application component to be false to enable email sending.
            <?php endif; ?>
        </p>

    <?php else: ?>



        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                <section class="contact_us">

                    <div class="container-xxl">
                        <div class="row">
                            <div class="contact_u">
                                <h1><strong></strong></h1>

                            </div>
                        </div>
                    </div>
                    <div class="container text-center">
                        <div class="row">
                            <div class="col">

                                <p class="down">Так же можете обратиться через телеграмм или по номеру телефона.</p>
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

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
</div>
