<?php

/* @var $this yii\web\View */
use \yii\grid\GridView;
use \yii\widgets\LinkPager;

$this->title = 'Ranking Enade';
?>

<div class="site-index">

    <div class="container">
        <h1>Ranking Enade</h1>
    </div>

    <div class="body-content">
        <div class="col-lg-12">
            <h4>Ranking das notas gerais das universidades:</h4>
        </div>

        <div class="col-lg-12">
                <?= GridView::widget([
                    'dataProvider' => $dataProviderInstituicao,
                    'filterModel' => $searchModelInstituicao,
                    'columns' => [
                    'ano',
                    [
                       'attribute' => 'idInstituicao',
                        'value' => 'instituicao.nome'
                    ],
                    [
                        'attribute' => 'instituicao.sigla',
                        'label' => 'Sigla',
                        'format' => 'text',
                    ],
                        'notaGeral',
                    ],
                ]); ?>
        </div>
        <div class="col-lg-12">
            <h4>Ranking das notas das universidades por curso:</h4>
        </div>
        <div class="col-lg-12">
            <?= GridView::widget([
                'dataProvider' => $dataProviderCurso,
                'filterModel' => $searchModelCurso,
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
                ],
            ]); ?>
        </div> 
    </div>
</div>
