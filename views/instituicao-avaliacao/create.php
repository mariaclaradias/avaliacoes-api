<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\InstituicaoAvaliacao */

$this->title = 'Avaliação da Instituição';
$this->params['breadcrumbs'][] = ['label' => 'Instituicao Avaliacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instituicao-avaliacao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
