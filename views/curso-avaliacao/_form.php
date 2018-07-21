<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \yii\helpers\ArrayHelper;
use \app\models\Instituicao;
use \app\models\Curso;

/* @var $this yii\web\View */
/* @var $model app\models\CursoAvaliacao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="curso-avaliacao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ano')->textInput() ?>

    <?= $form->field($model, 'idInstituicao')->dropDownList(ArrayHelper::map(Instituicao::find()->all(), 'id', 'nome'), ['prompt'=>'Selecione uma instituição'])?>

    <?= $form->field($model, 'idCurso')->dropDownList(ArrayHelper::map(Curso::find()->all(), 'id', 'nome'), ['prompt'=>'Selecione um curso'])?>

    <?= $form->field($model, 'nota')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notaMedia')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
