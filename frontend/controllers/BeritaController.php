<?php

namespace frontend\controllers;
use akiraz2\blog\models\BlogPost;

class BeritaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $berita = BlogPost::find()->where(["category_id" => 1])->orderBy('id', "DESC")->all();
        return $this->render('index', ['beritas'=>$berita]);
    }

}
