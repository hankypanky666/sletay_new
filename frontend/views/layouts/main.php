<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use kartik\icons\Icon;

Icon::map($this);// Maps the Elusive icon font framework

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo Yii::$app->request->getBaseUrl(); ?>/img/favicon32.ico" type="image/x-icon">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/img/logo-head-small.png', ['alt'=>Yii::$app->name]),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => Icon::show('plane').'Авиабилеты', 'url' => ['/site/index']],
        ['label' => Icon::show('h-square').'Отели', 'url' => ['/site/hotels']],
        ['label' => Icon::show('gift').'Спецпредложения', 'url' => ['/site/actions']],
        ['label' => Icon::show('newspaper-o').'Новости', 'url' => ['/site/news']],
    ];
//    if (Yii::$app->user->isGuest) {
//        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
//        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
//    } else {
//        $menuItems[] = [
//            'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
//            'url' => ['/site/logout'],
//            'linkOptions' => ['data-method' => 'post']
//        ];
//    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right', 'role' => 'tablist'],
        'items' => $menuItems,
        'encodeLabels' => false,
    ]);
    NavBar::end();
    ?>


    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
    </div>
        <?= $content ?>

</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; sletay.by <?= date('Y') ?></p>

        <p class="pull-right"> <?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
