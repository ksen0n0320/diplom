<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Pet $model */

$this->title = $model->id_pet;
$this->params['breadcrumbs'][] = ['label' => 'Питомцы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pet-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id_pet' => $model->id_pet], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id_pet' => $model->id_pet], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_pet',
            'category_id',
            ['attribute'=>'Фото', 'format'=>'html', 'value'=>function($model){return"<img src='/web/assets/image/pets {$model->photo}' alt='photo' style='width: 70px;'>";}],
            'nickname',
            'data_reg',
            'age',
            'description',
        ],
    ]) ?>

</div>
