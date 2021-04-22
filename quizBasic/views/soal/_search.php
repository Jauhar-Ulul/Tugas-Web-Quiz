<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SoalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="soal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nama_guru') ?>

    <?= $form->field($model, 'link_guru') ?>

    <?= $form->field($model, 'link_soal') ?>

    <?= $form->field($model, 'soal') ?>

    <?= $form->field($model, 'jawaban') ?>

    <?php // echo $form->field($model, 'nilai_soal') ?>

    <?php // echo $form->field($model, 'waktu_soal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
