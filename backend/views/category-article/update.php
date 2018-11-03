<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CategoryArticle */

$this->title = 'Update Category Article: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Category Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="category-article-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
