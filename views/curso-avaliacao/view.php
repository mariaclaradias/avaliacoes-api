<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CursoAvaliacao */

$this->title = $model->ano;
$this->params['breadcrumbs'][] = ['label' => 'Curso Avaliacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curso-avaliacao-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ano' => $model->ano, 'idInstituicao' => $model->idInstituicao, 'idCurso' => $model->idCurso], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ano' => $model->ano, 'idInstituicao' => $model->idInstituicao, 'idCurso' => $model->idCurso], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ano',
            'idInstituicao',
            'idCurso',
            'nota',
            'notaMedia',
        ],
    ]) ?>

</div>
