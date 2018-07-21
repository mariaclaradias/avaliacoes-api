<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CursoAvaliacaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Avaliações dos Cursos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curso-avaliacao-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Avalie um curso', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'ano',
            [
                'attribute' => 'idInstituicao',
                'value' => 'instituicao.nome'
            ],
            [
                'attribute' => 'idCurso',
                'value' => 'curso.nome'
            ],
            'nota',
            'notaMedia',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
