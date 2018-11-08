<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MsoClassSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mso Classes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mso-class-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mso Class', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">mso-class</h3>
    </div>
    <div class="box-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
</div>
