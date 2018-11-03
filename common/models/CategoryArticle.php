<?php

namespace common\models;

use Yii;
use \common\models\base\CategoryArticle as BaseCategoryArticle;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "category_article".
 */
class CategoryArticle extends BaseCategoryArticle
{

    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
            parent::rules(),
            [
                # custom validation rules
            ]
        );
    }
}
