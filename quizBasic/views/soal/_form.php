<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Soal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="soal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_guru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_guru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_soal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'soal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jawaban')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nilai_soal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'waktu_soal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
