<?php
use yii\helpers\Html;

$this->title = 'Manager Dashboard';
?>
<h1><?= Html::encode($this->title) ?></h1>

<ul>
    <?php foreach ($projects as $project): ?>
        <li><?= Html::encode("{$project->title} ({$project->description})") ?></li>
    <?php endforeach; ?>
</ul>
