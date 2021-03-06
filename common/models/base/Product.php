<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace common\models\base;

use Yii;

/**
 * This is the base-model class for table "product".
 *
 * @property integer $id
 * @property string $product_name
 * @property string $description
 * @property integer $price
 * @property string $images
 * @property string $aliasModel
 */
abstract class Product extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string',],
            [['price'], 'integer'],
            [['product_name',], 'string', 'max' => 255],
            [['description','price','product_name'],'required'],
            [['images'],'file', 'skipOnEmpty'=>true, 'extensions' => 'png,jpg,jpeg']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_name' => 'Product Name',
            'description' => 'Description',
            'price' => 'Price',
            'images' => 'Images',
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->images->saveAs('uploads/product/' . $this->images->baseName . '.' . $this->images->extension);
            return true;
        } else {
            return false;
        }
    }


}
