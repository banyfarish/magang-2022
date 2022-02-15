<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\User */

?>
<br><br><br>
<div class="user-update">

    <?php $this->title = 'Update User: ' . $model->id;?> 
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    <?= Html::a('Back', ['index'], ['class' => 'btn btn-primary']) ?>

</div>
