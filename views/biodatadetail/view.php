<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Biodatadetail */

$this->title = $model->id_biodata_detail;
$this->params['breadcrumbs'][] = ['label' => 'Biodatadetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="biodatadetail-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_biodata_detail], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_biodata_detail], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_biodata_detail',
            'id_biodata',
            'bulan',
            'umur',
            'jenis_kelamin',
            'aktivitas',
            'imt',
            'kolesterol',
            'tekanan_darah',
            'gula_darah_puasa',
            'gula_darah_2jam',
            'kalori',
        ],
    ]) ?>

</div>
