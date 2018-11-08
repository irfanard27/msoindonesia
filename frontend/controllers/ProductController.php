<?php

namespace frontend\controllers;

use common\models\Product;
use yii\data\Pagination;

class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Product::find();
        $countQuery = clone $query;
        $pages = new Pagination([
            'totalCount' => $countQuery->count(),
            'pageSize'=> 12
        ]);
      
        $models = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('index',[
            'products' => $models,
            'pages' => $pages,
        ]);
    }

}
