<?php
use yii\helpers\Url;
use yii\helpers\Html;
use common\models\User;
use common\models\MsoClass;
?>
<div class="border-bottom  bg-white">
    <div class="container d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white">
        <h5 class="my-0 mr-md-auto font-weight-normal"><b>MSO</b> Indonesia</h5>
        <nav class="my-0 my-md-0 mr-md-5 mr-md-2">
            <a class="p-3" href="<?=Url::toRoute("/site") ?>">Home</a>
            <a class="p-3" href="<?=Url::toRoute("/product") ?>">Produk</a>
            <a class="p-3" href="<?=Url::toRoute('/berita') ?>">Berita</a>
            <a class="p-3" href="#">Penghargaan</a>
        </nav>
        <div class="mr-md-2">
             
            <?php if(\Yii::$app->user->isGuest){?>
            <a class="btn btn-primary " href="<?= Url::toRoute("/site/signup") ?>">Sign up</a> 
            <a class="btn btn-secondary" href="<?= Url::toRoute("/site/login") ?>">Sign in</a>
            <?php } else { ?>
                <div class="dropdown">
                <img src="<?=\Yii::getAlias("@web");?>/img/usr_icon.png" alt="..." width="30px" height="30px" class="rounded">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= \Yii::$app->user->identity->username ?>
                </button>
                <div class="dropdown-menu mt-3" aria-labelledby="dropdownMenuButton" style="width: 300px;">
                    <p class='p-4 text-center'>
                        <img src="<?=\Yii::getAlias("@web");?>/img/usr_icon.png" class="rounded mx-auto d-block mb-2" width="75" height="75" alt="<?=\Yii::$app->user->identity->username?>">
                        <span class="lead"><?=\Yii::$app->user->identity->username?></span><br />
                        <span class="text-muted"><?=\Yii::$app->user->identity->email ?></span><br />
                        <?= MsoClass::findOne(\Yii::$app->user->identity->mso_class_id)->nama ?>
                    </p>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?=Url::to("kelas")?>">Kelas Belajar</a>
                    <a class="dropdown-item" href="#">Transaksi</a>
                    <a class="dropdown-item" href="#">Profil</a>
                    <?= Html::a('Sign out',['/site/logout'],
                    ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                                ) ?>
                </div>
                </div>
            <?php } ?>
        </div>
        </div>
    </div>
</div>