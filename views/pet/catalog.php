<?php

use app\models\Pet;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\bootstrap5\Html;

/** @var yii\web\View $this */
/** @var app\models\PetSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Питомцы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pet-catalog">

    <h1><?= Html::encode($this->title) ?></h1>


    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="container">
    <div class="row gy-3 gx-5 justify-content-space-around">
        <div class="col-sm-6 w-25">
            <div class="card">
            <img src="https://dp-danilova.сделай.site/web/assets/image/ava_c1.jpg" class="card-img-top " alt="...">
            <div class="card-body">
                <h2 class="card-title">Коты и кошки</h2>
                <p class="card-text"></p>
                <a href="https://dp-danilova.сделай.site/pet/cat" class="btn btn-success">Выбрать питомца</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6 w-25">
            <div class="card">
            <img src="https://dp-danilova.сделай.site/web/assets/image/ava_d.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title">Собаки</h2>
                <p class="card-text"></p>
                <a href="https://dp-danilova.сделай.site/pet/dog" class="btn btn-success">Выбрать питомца</a>
            </div>
            </div>
        </div>
        
    </div>
    </div>