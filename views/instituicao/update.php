<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Instituicao */

$this->title = 'ID ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Instituicoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="instituicao-update">

    <h1>Editar Instituição </h1>
    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
