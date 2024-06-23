<?php
/** @var yii\web\View $this */

use yii\bootstrap5\Html;
$this->title = 'Панель администратора';
?>
<br>

<!--<p><a href="/pet">Управление питомцами</a></p>
<p><a href="/user">Управление анкетами</a></p>-->

<div class="container">
    <style>
        .btn-width {
            width: 100%;
        }
    </style>
    <h1>Панель администратора</h1>
    <br>
    <p><?= Html::a('Управление анкетами', ['/user/index'], ['class' => 'btn btn-lg btn-success btn-width']) ?></p>
    <p><?= Html::a('Управление питомцами', ['/pet/index'], ['class' => 'btn btn-lg btn-success btn-width']) ?></p>
</div>
