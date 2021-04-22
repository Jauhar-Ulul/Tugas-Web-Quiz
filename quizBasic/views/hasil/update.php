<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hasil */

$this->title = 'Update Hasil: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Hasils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hasil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
