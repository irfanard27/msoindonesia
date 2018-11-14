<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">

<div class="mt-5">
        <div class="offset-3 col-lg-6"><br /> <br /><br /><br /><br />
            <div class="row bg-light box-shadow">
                <div class="col p-5 text-center">
                <h1><?= Html::encode($this->title) ?></h1>


                <p>Please fill out the following fields to login:</p>
                    <br />
                <img src="../img/undraw_startup_life_2du2.svg" width="300px" height="auto" />
                </div>
                <div class="col">
                    <div class="card bg-light">
                        <div class="card-header bg-light">
                            
                        </div>
                        <div class="card-body p-5">
                
                        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                            <?= $form->field($model, 'email') ?>

                            <?= $form->field($model, 'password')->passwordInput() ?>

                            <div class="form-group">
                                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
