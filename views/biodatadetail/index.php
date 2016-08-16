<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BiodatadetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Biodatadetails';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="biodatadetail-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Biodatadetail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_biodata_detail',
            'id_biodata',
            'bulan',
            'umur',
            'jenis_kelamin',
            // 'aktivitas',
            // 'imt',
            // 'kolesterol',
            // 'tekanan_darah',
            // 'gula_darah_puasa',
            // 'gula_darah_2jam',
            // 'kalori',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
