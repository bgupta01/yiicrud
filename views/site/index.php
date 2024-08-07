<?php

/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Welcome to yii</h1>
        
        <?php if (!Yii::$app->user->isGuest): ?>
            <p>Manage your Projects: 
                <?= Html::a('Manage Project', Url::to(['project/index']), ['class' => 'btn btn-lg btn-success']) ?>
            </p>
        <?php endif; ?>
    </div>
</div>
