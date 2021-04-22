<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SoalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Soals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="soal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Soal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama_guru',
            'link_guru',
            'link_soal',
            'soal',
            'jawaban',
            //'nilai_soal',
            //'waktu_soal',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
