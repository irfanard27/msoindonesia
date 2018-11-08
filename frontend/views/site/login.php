<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    

    <div class="mt-5">
        <div class="offset-3 col-lg-6"><br /> <br /><br /><br /><br />
            <div class="row bg-light box-shadow">
                <div class="col p-5 text-center">
                <h1>MSO Member <?= Html::encode($this->title) ?></h1>

                <p>Please fill out the following fields to login:</p>
                    <br />
                <img src="../img/undraw_startup_life_2du2.svg" width="300px" height="auto" />
                </div>
                <div class="col">
                    <div class="card bg-light">
                        <div class="card-header bg-light">
                            
                        </div>
                        <div class="card-body p-5">
                
                            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                                <?= $form->field($model, 'password')->passwordInput() ?>

                                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                                <div style="color:#999;margin:1em 0">
                                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                                </div>

                                <div class="form-group">
                                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                                </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
