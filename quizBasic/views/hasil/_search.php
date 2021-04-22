<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HasilSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hasil-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'link_guru') ?>

    <?= $form->field($model, 'link_soal') ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama_murid') ?>

    <?= $form->field($model, 'nilai_murid') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
