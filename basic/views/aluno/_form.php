<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$items = ['Masculino', 'Feminino'];
$items_cursos = ['Ciência da Computação','Sistemas de Informação','Engenharia da Computação'];
/* @var $this yii\web\View */
/* @var $model app\models\Aluno */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aluno-form">
    
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'matricula')->textInput() ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sexo')->dropDownList($items) ?>

    <?= $form->field($model, 'id_curso')->dropDownList($items_cursos) ?>

    <?= $form->field($model, 'ano_ingresso')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Criar' : 'Editar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
