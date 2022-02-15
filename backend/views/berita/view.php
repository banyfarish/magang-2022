<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Berita */


\yii\web\YiiAsset::register($this);
?>
<br><br><br><br>
<div class="berita-view">
    <p>
        <?= Html::a('Update', ['update', 'id_berita' => $model->id_berita], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_berita' => $model->id_berita], [
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
            'id_berita',
            'slug',
            'judul',
            'headline',
            'isi',
            [
                'enctype' => 'multipart/form-data',
                'attribute' => 'gambar',
                'value' => Html::img(Yii::$app->request->BaseUrl . '/uploads/' . $model->gambar, ['alt' => 'some', 'class' => 'thing', 'width' => '500px']),
                'format' => ['raw'],
            ],

            'time',
        ],
    ]) ?>

</div>