<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Hasil */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hasil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'link_guru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link_soal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_murid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nilai_murid')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
