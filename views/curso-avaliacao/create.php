<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CursoAvaliacao */

$this->title = 'Avaliação do Curso';
$this->params['breadcrumbs'][] = ['label' => 'Curso Avaliacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curso-avaliacao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
