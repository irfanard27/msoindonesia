<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Materi */

$this->title = 'Update Materi: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Materis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="materi-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
