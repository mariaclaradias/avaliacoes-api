<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InstituicaoAvaliacaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Avaliações das Instituições';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instituicao-avaliacao-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Avalie uma instituição', ['create'], ['class' => 'btn btn-success']) ?>
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
            'notaGeral',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
