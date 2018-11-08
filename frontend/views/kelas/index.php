<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use common\models\Kelas;

$this->title = 'Kelas Belajar';
$this->params['breadcrumbs'][] = $this->title;

$user_id = Yii::$app->user->id;
$user_mso_class = Yii::$app->user->identity->mso_class_id;
$kelas = Kelas::find()->where(["member_id"=>$user_id, "mso_class_id"=> $user_mso_class])->one();
?>
<div class="container mt-5">
    <h1><?= Html::encode($this->title) ?></h1>

    <p class="lead text-muted">Download Materi yang sudah disediakan, Anda akan dapat mendownload materi tiap hari

    </p>
    <?php
        $is_in_kelass = Kelas::find()->where(["member_id"=>$user_id, "mso_class_id"=>$user_mso_class])->count();
        if($is_in_kelass == 0){
    ?> 
            <a href="kelas/start-class" class="btn btn-primary">Mulai Kelas Baru</a>
    <?php } else { ?>

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
