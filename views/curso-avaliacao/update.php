<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CursoAvaliacao */

$this->title = 'Editar Avaliação do Curso: ' . $model->ano;
$this->params['breadcrumbs'][] = ['label' => 'Curso Avaliacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ano, 'url' => ['view', 'ano' => $model->ano, 'idInstituicao' => $model->idInstituicao, 'idCurso' => $model->idCurso]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="curso-avaliacao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
