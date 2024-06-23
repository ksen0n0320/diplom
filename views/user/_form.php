<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\User $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true],) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nickname_pet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'why')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kids')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'other_pet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vet_help')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agreement')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'adaptation')->textInput(['maxlength' => true]) ?>

    <?php 
        $li=[]; $statuses=\app\models\Status::find()->all();
        foreach ($statuses as $status)
        { 
        $li[$status->id_status]=$status->name; 
        }
    ?>

    <?= $form->field($model, 'status_id')->dropDownList($li) ?>

    <div class="form-group">
    <?= Html::submitButton('Сохранить и отправить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
