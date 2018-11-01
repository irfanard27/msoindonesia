<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MsoClass */

$this->title = 'Create Mso Class';
$this->params['breadcrumbs'][] = ['label' => 'Mso Classes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mso-class-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
