<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Sistem Menu Gizi Penderita Diabetes',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
	
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            //['label' => 'About', 'url' => ['/site/about']],
            //['label' => 'Contact', 'url' => ['/site/contact']],
            //['label' => 'Network', 'url' => ['/networks']],
            //['label' => 'Resend', 'url' => ['/resend']],
            //['label' => 'Reset', 'url' => ['/reset']],
            //['label' => 'Show', 'url' => ['/show']],
            //['label' => 'Account', 'url' => ['/account']],
            ['label' => 'Konsultasi', 'url' => ['/konsultasi/index']],
            ['label' => 'Riwayat', 'url' => ['/riwayat/index']],
            ['label' => 'Gejala', 'url' => ['/gejala/index']],
            ['label' => 'Kategori', 'url' => ['/kategori/index']],
            ['label' => 'Menu', 'url' => ['/menu/index']],
            ['label' => 'Profile', 'url' => ['/profile']],
			['label' => 'User', 'url' => ['/index']],
			['label' => 'Statistik', 'url' => ['/statistik/index']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= date('Y') ?> Sistem  Rekomendasi Menu Gizi untuk Penderita Diabetes Melitus Tipe II</p>

        <p class="pull-right">Powered by Prihatin Susilowati</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
