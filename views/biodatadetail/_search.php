<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BiodatadetailSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="biodatadetail-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_biodata_detail') ?>

    <?= $form->field($model, 'id_biodata') ?>

    <?= $form->field($model, 'bulan') ?>

    <?= $form->field($model, 'umur') ?>

    <?= $form->field($model, 'jenis_kelamin') ?>

    <?php // echo $form->field($model, 'aktivitas') ?>

    <?php // echo $form->field($model, 'imt') ?>

    <?php // echo $form->field($model, 'kolesterol') ?>

    <?php // echo $form->field($model, 'tekanan_darah') ?>

    <?php // echo $form->field($model, 'gula_darah_puasa') ?>

    <?php // echo $form->field($model, 'gula_darah_2jam') ?>

    <?php // echo $form->field($model, 'kalori') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
