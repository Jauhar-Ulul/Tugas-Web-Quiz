<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Hasil */

$this->title = 'Create Hasil';
$this->params['breadcrumbs'][] = ['label' => 'Hasils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
