<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use common\models\Kelas;
use common\models\MsoClass;

$this->title = 'Kelas Belajar';
$this->params['breadcrumbs'][] = $this->title;

$user_id = Yii::$app->user->id;
$user_mso_class = Yii::$app->user->identity->mso_class_id;
$kelas = Kelas::find()->where(["member_id"=>$user_id, "mso_class_id"=> $user_mso_class])->one();
?>
<div class="jumbotron bg-primary">
    <div class="container">
        <h1 class="display-4">Kelas Belajar</h1>
        <p class="lead">Download Materi yang sudah disediakan, Anda akan dapat mendownload materi tiap hari<br/>
        Usahakan Anda membaca materi setiap hari

        </p>
        
    </div>
</div>
<div class="container mt-5">
    <?php
        $is_in_kelass = Kelas::find()->where(["member_id"=>$user_id, "mso_class_id"=>$user_mso_class])->count();
        if($is_in_kelass == 0){
    ?> 
            <a href="kelas/start-class" class="btn btn-primary">Mulai Kelas Baru</a>
    <?php } else { ?>

    <div class="media mb-3">
    <img src="<?=\Yii::getAlias("@web");?>/img/usr_icon.png" alt="user-image" width="70px" height="auto" class="rounded mr-3">
    <div class="media-body">
        <h5 class="mt-0"><?=\Yii::$app->user->identity->username?> | <?= MsoClass::findOne(\Yii::$app->user->identity->mso_class_id)->nama ?></h5>
        <span class="text-muted"><?=\Yii::$app->user->identity->email ?></span><br />
        

        <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
        </div>
    </div>
    </div>
    <hr >
    

    <div class="list-group">
        <?php foreach($materis as $materi) { 
            if(date("d-m-Y") == $kelas->start_date && $kelas->day == $materi->day) {
                $active = "active";
            } else {
                if($kelas->day > $materi->day){
                    $active = "active";
                } else {
                    $active = "";
                }
            }
            ?>
        <div href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><?= $materi->title?> 
                    <?php if($materi->day == $kelas->day){?>
                    <span class="badge badge-danger">Akan Aktif Besok</span>
                    <?php } ?>
                </h5>
                <?php if($active == "active"){ ?>
                <small class="text-primary">Day <?= $materi->day?></small>
                <?php } else { ?>
                    <small>Day <?= $materi->day?></small>
                <?php } ?>
            </div>
            <p class="mb-1"><?= $materi->description?><br><br>
            <?php if($active == "active"){ ?>
            <a href="<?=Url::to("kelas/download-materi")?>" class="btn btn-primary">
                Download Materi
            </a>
            <?php } ?>
            </p>

        </div>
        <?php } ?>
    </div>

    <?php } ?>

</div>
