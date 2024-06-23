<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PetSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pet-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pet') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'photo') ?>

    <?= $form->field($model, 'nickname') ?>

    <?= $form->field($model, 'data_reg') ?>

    <?= $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
