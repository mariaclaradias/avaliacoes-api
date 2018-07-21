<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\InstituicaoAvaliacao */

$this->title = $model->ano;
$this->params['breadcrumbs'][] = ['label' => 'Instituicao Avaliacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instituicao-avaliacao-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ano' => $model->ano, 'idInstituicao' => $model->idInstituicao], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ano' => $model->ano, 'idInstituicao' => $model->idInstituicao], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem certeza que deseja apagar esse item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ano',
            'idInstituicao',
            'notaGeral',
        ],
    ]) ?>

</div>
