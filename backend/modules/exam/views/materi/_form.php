<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Materi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="materi-form">

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title"><?= $model->isNewRecord ? 'Create' : 'Update' ?> materi</h3>
    </div>

    <div class="box-body">
    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'mso_class_id')->textInput() ?>

    <?= $form->field($model, 'day')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>

</div>
