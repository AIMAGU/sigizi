<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Biodatadetail */

$this->title = 'Update Biodatadetail: ' . $model->id_biodata_detail;
$this->params['breadcrumbs'][] = ['label' => 'Biodatadetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_biodata_detail, 'url' => ['view', 'id' => $model->id_biodata_detail]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="biodatadetail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
