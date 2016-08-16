<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Biodata */

$this->title = $model->id_biodata;
$this->params['breadcrumbs'][] = ['label' => 'Biodatas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="biodata-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_biodata], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_biodata], [
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
            'id_biodata',
            'nama_lengkap',
            'jenis_kelamin',
            'tempat_lahir',
            'tanggal_lahir',
            'alamat:ntext',
            'telp',
            'id_biodata_detail',
            'id_user',
        ],
    ]) ?>

</div>
