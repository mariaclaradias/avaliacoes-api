<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CursoAvaliacaoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="curso-avaliacao-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ano') ?>

    <?= $form->field($model, 'idInstituicao') ?>

    <?= $form->field($model, 'idCurso') ?>

    <?= $form->field($model, 'nota') ?>

    <?= $form->field($model, 'notaMedia') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
