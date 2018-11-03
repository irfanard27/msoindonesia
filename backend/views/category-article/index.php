<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategoryArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Category Articles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-article-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Category Article', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">category-article</h3>
    </div>
    <div class="box-body">
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
</div>
