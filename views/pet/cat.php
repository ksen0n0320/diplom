<?php

use app\models\Pet;
use yii\bootstrap5\Html;
use yii\data\ActiveDataProvider;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PetSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Коты и кошки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pet-cat">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <!--<?= Html::a('Добавить питомца', ['create'], ['class' => 'btn btn-success']) ?>-->
    <div class="container"></div>

    <div class="row gy-5 gx-5">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php foreach ($catt as $model) { ?>
            <div class="col-sm-4">
                <div class="card text-center">
                    <div class="card-body">
                        <img class="fit-picture" src="https://dp-danilova.сделай.site/web/assets/image/pets<?= $model->photo ?>" width=300 height = 200 alt="" />
                        <h5 class="card-title"><?= Html::encode($model->nickname) ?></h5>
                        <p class="card-text">В приюте с: <?= Html::encode($model->data_reg) ?></p>
                        <p class="card-text">Возраст: <?= Html::encode($model->age) ?> </p>
                        <p class="card-text"><?= Html::encode($model->description) ?></p>
                        <a href="https://dp-danilova.сделай.site/user/create" class="btn btn-success">Хочу забрать</a>
                        </div>
                </div>
            </div>
        <?php  }?>
    </div>
</div>
