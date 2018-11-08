<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\MsoClass */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mso Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mso-class-view">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

   <div class="box box-primary">         
   <div class="box-header with-border">
        <h3 class="box-title">mso-class</h3>
    </div>

    <div class="box-body">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
        ],
    ]) ?>
    </div>
    </div>

</div>
