<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Biodatadetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="biodatadetail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_biodata')->textInput() ?>

    <?= $form->field($model, 'bulan')->textInput() ?>

    <?= $form->field($model, 'umur')->textInput() ?>

    <?= $form->field($model, 'jenis_kelamin')->textInput() ?>

    <?= $form->field($model, 'aktivitas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kolesterol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tekanan_darah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gula_darah_puasa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gula_darah_2jam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kalori')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
