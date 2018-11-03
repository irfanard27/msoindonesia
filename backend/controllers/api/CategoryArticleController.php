<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "CategoryArticleController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class CategoryArticleController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\CategoryArticle';
}
