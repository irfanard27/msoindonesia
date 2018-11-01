<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "MsoClassController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class MsoClassController extends \yii\rest\ActiveController
{
public $modelClass = 'common\models\MsoClass';
}
