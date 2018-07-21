<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InstituicaoAvaliacao */

$this->title = 'Update Instituicao Avaliacao: ' . $model->ano;
$this->params['breadcrumbs'][] = ['label' => 'Instituicao Avaliacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ano, 'url' => ['view', 'ano' => $model->ano, 'idInstituicao' => $model->idInstituicao]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="instituicao-avaliacao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
