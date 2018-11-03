<?php
/**
 * Project: yii2-blog for internal using
 * Author: akiraz2
 * Copyright (c) 2018.
 */

use akiraz2\blog\models\BlogCategory;
use akiraz2\blog\Module;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel akiraz2\blog\models\BlogCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Module::t('blog', 'Blog Categorys');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary">
    <div class="box-header with-border">
        <span class="box-title">Detail</span>
    </div>
    <div class="box-body">
<div class="blog-category-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <p>
        <?= Html::a(Module::t('blog', 'Create ') . Module::t('blog', 'Blog Category'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th><?= Module::t('blog', 'Banner') ?></th>
            <th><?= Module::t('blog', 'Title') ?> </th>
            <th><?= Module::t('blog', 'Sort Order') ?></th>
            <th><?= Module::t('blog', 'Template') ?></th>
            <th><?= Module::t('blog', 'Is Nav') ?></th>
            <th><?= Module::t('blog', 'Status') ?></th>
            <th><?= Module::t('blog', 'Actions') ?></th>
        
        </tr>
        </thead>
        <tbody>
        <?php foreach ($dataProvider as $item) { ?>
            <tr data-key="1">
                <td><?= $item['id']; ?></td>
                <td><?= Html::img($item['banner'], ['class' => 'img-responsive', 'width' => 100]); ?></td>
                <td><?= $item['str_label']; ?></td>
                <td><?= $item['sort_order']; ?></td>
                <td><?= $item['template']; ?></td>
                <td><?= BlogCategory::getOneIsNavLabel($item['is_nav']); ?></td>
                <td><?= $item['status']; ?></td>
                <td>
                    <a href="<?= \Yii::$app->getUrlManager()->createUrl(['blog/blog-category/create', 'parent_id' => $item['id']]); ?>" title="<?= Module::t('blog', 'Add Sub Catelog'); ?>" class="btn btn-xs btn-primary"
                       data-pjax="0"><span class="fa fa-plus"></span></a>
                    <a href="<?= \Yii::$app->getUrlManager()->createUrl(['blog/blog-category/view', 'id' => $item['id']]); ?>"" title="<?= Module::t('blog', 'View'); ?>" data-pjax="0" class="btn btn-xs btn-primary"><span
                        class="fa fa-eye"></span></a>
                    <a href="<?= \Yii::$app->getUrlManager()->createUrl(['blog/blog-category/update', 'id' => $item['id']]); ?>"" title="<?= Module::t('blog', 'Update'); ?>" data-pjax="0" class="btn btn-xs btn-primary"><span
                        class="fa fa-pencil"></span></a>
                    <a href="<?= \Yii::$app->getUrlManager()->createUrl(['blog/blog-category/delete', 'id' => $item['id']]); ?>"" title="<?= Module::t('blog', 'Delete'); ?>" class="btn btn-xs btn-primary"
                    data-confirm="<?= Module::t('blog', 'Are you sure you want to delete this item?'); ?>" data-method="post" data-pjax="0"><span class="fa fa-trash" ></span></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</div>
</div>
</div>