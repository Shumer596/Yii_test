<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserReg */
/* @var $form ActiveForm */
$this->title = 'Registration';
?>
<div class="reg">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to register:</p>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_name') ?>
    <?= $form->field($model, 'user_passwd') ?>
    <?= $form->field($model, 'user_email') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- reg -->
