<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MsoClass */

$this->title = 'Update Mso Class: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mso Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mso-class-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
