<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "ArticleController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class ArticleController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\Article';
}
