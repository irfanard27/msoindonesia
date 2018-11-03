<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><?= $model->isNewRecord ? 'Create' : 'Update' ?> user</h3>
    </div>

    <div class="box-body">
    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>

</div>
