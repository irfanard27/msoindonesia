<?php

namespace common\models;

use Yii;
use \common\models\base\Kelas as BaseKelas;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "kelas".
 */
class Kelas extends BaseKelas
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
