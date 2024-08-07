<?php
use yii\helpers\Html;

$this->title = 'Admin Dashboard';
?>
<h1><?= Html::encode($this->title) ?></h1>

<ul>
    <?php foreach ($users as $user): ?>
        <li><?= Html::encode("{$user->name} ({$user->email})") ?></li>
    <?php endforeach; ?>
</ul>
