<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Biodatadetail */

$this->title = 'Create Biodatadetail';
$this->params['breadcrumbs'][] = ['label' => 'Biodatadetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="biodatadetail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
