<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\wilayah $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="wilayah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kode_wilayah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_wilayah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
