<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    
    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
            <h1 class="display-5">Обязательно позвоните перед приездом</h1>
        </div>

        <div class="row gx-6 text-center">
            <div class="col-lg-6">   
                <h2>
                    Телефон: 8(812)660-51-77
                </h2>
                <p>
                    Прием звонков осуществляется с 11.00 до 16.00 с понедельника по субботу, воскресенье выходной. Это не время работы приюта и не время для посещений.
                </p>
                <p> 
                    E-mail: ksenon02012005@gmail.com
                </p>
                <p>
                    Адрес Санкт-Петербург, Гаражный проезд, д. 4
                </p>
                <p>
                    Транспорт от метро Обухово: <br>
                    Маршрутка: 96 <br>
                    Автобус: 96
                </p>
            </div>
            <div class="col-lg-6">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0
                /js/?um=constructor%3A2fa528a41d220af554775c56c7013989791cef5adb923b7029e13c3dcd34fbab
                &amp;width=545&amp;height=341&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>

</div>
