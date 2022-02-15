<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\About */

?>
<br><br><br><br>
<?php 
$this->title = 'Create About';
?>
<div class="about-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
