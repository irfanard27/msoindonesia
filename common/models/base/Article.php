<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;

/**
 * This is the base-model class for table "article".
 *
 * @property integer $id
 * @property string $title
 * @property string $body
 * @property string $status
 * @property string $image
 * @property string $aliasModel
 */
abstract class Article extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['body'], 'string'],
            [['title', 'image'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 12]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'body' => 'Body',
            'status' => 'Status',
            'image' => 'Image',
        ];
    }




}