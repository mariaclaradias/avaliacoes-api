<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InstituicaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Instituições';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instituicao-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cadastrar Instituicao', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'nome',
            'sigla',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
