<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MateriSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Materis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="materi-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Materi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">materi</h3>
    </div>
    <div class="box-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'mso_class_id',
            'day',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
</div>
