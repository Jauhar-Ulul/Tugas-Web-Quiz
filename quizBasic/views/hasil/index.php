<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HasilSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hasils';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hasil-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Hasil', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'link_guru',
            'link_soal',
            'id',
            'nama_murid',
            'nilai_murid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
