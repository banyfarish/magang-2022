<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\About */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'misi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'visi')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'profil_ketua')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tentang')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'gambar')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
