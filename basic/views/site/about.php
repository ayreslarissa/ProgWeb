<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Projeto criado pela aluna Larissa Ayres da disciplina de Programação Web - 2015/1 (IComp - UFAM).
    </p>

    <p> <?= $data ?></p>
    <code><?= __FILE__ ?></code>
</div>
