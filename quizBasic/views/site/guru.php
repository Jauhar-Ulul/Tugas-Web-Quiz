<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Guru */
/* @var $form ActiveForm */
?>
<div class="site-guru">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nama') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'link_admin') ?>
        <?= $form->field($model, 'link_soal') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-guru -->
