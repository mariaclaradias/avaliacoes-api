<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \yii\helpers\ArrayHelper;
use \app\models\Instituicao;

/* @var $this yii\web\View */
/* @var $model app\models\InstituicaoAvaliacao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="instituicao-avaliacao-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ano')->textInput() ?>
    
    <?= $form->field($model, 'idInstituicao')->dropDownList(ArrayHelper::map(Instituicao::find()->all(), 'id', 'nome'), ['prompt'=>'Selecione uma instituição'])?>

    <?= $form->field($model, 'notaGeral')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
