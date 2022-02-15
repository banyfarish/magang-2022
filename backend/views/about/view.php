<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\About */?>
<br><br><br><br>
<?php
\yii\web\YiiAsset::register($this);
?>
<div class="about-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_about' => $model->id_about], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_about' => $model->id_about], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        
        ]) ?>
        <?= Html::a('Back', ['index'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_about',
            'judul',
            'isi',
            'misi',
            'visi',
            'profil_ketua',
            'tentang',
            'gambar',
        ],
    ]) ?>

</div>
