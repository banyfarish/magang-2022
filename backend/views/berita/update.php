<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Berita */


?>
<br><br><br><br>
<div class="berita-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
