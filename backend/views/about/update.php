<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\About */

?>
<br><br><br><br>
<div class="about-update">

    <?php $this->title = 'Update About: ' . $model->id_about;?>

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
