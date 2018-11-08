<?php

namespace frontend\controllers;

use common\models\Kelas;
use common\models\Materi;

class KelasController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $materi = Materi::find()->where(["mso_class_id"=> \Yii::$app->user->identity->mso_class_id])->all();
        return $this->render('index',['materis'=> $materi]);
    }

    public function actionStartClass(){
        $model = new Kelas;

        $model->member_id = \Yii::$app->user->id;
        $model->mso_class_id = \Yii::$app->user->identity->mso_class_id;
        $model->start_date = date("d-m-Y");
        $model->day = 1;
        $model->save();

        return $this->goBack(\Yii::$app->request->referrer);
    }

    public function actionDownloadMateri(){
        $model = Kelas::find()->where(['member_id'=> \Yii::$app->user->id, 'mso_class_id'=>\Yii::$app->user->identity->mso_class_id])->one();

        $date = strtotime($model->start_date);
        
        if( date("d-m-Y", $date - 1) != date("d-m-Y")){
            $model->start_date = date("d-m-Y", strtotime('tomorrow'));
            $model->day = $model->day + 1;
            if($model->save()){
                return $this->goBack(\Yii::$app->request->referrer);
            }
        } 
        return $this->goBack(\Yii::$app->request->referrer);
    }

}
