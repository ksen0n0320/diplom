<?php

use app\models\Pet;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\PetSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Питомцы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pet-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить питомца', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pet',
            //'category_id',
            ['attribute'=>'Категория', 'value'=> function($data){return $data->getCategory()->One()->name;}],
            ['attribute'=>'Фото', 'format'=>'html', 'value'=>function($model){return"<img src='/web/assets/image/pets {$model->photo}' alt='photo' style='width: 70px;'>";}],
            'nickname',
            'data_reg',
            'age',
            'description',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pet $model, $key, $index, $column) {
                return Url::toRoute([$action, 'id_pet' => $model->id_pet]);
                }
            ],
        ],
    ]); ?>


</div>
