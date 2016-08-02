<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Kategori;

/* @var $this yii\web\View */
/* @var $model app\models\Gejala */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gejala-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_gejala')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nilai')->textInput(['maxlength' => true]) ?>
	
	<?= $form->field($model, 'id_kategori')->dropDownList(
        ArrayHelper::map(Kategori::find()->all(), 'id_kategori', 'nama'))
	?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
