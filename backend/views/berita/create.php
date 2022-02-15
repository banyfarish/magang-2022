<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Berita */

?>
<br><br><br><br>
<?php 
$this->title = 'Create Berita';
?>
<div class="berita-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
