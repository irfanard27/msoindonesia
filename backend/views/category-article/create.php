<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CategoryArticle */

$this->title = 'Create Category Article';
$this->params['breadcrumbs'][] = ['label' => 'Category Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-article-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
