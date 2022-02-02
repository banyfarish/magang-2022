<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Berita */

$this->title = $model->id_berita;
$this->params['breadcrumbs'][] = ['label' => 'Beritas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="berita-view">
    <p>
        <?= Html::a('Back', ['index'], ['class' => 'btn btn-primary']) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_berita',
            'judul',
            'headline',
            [
                'enctype' => 'multipart/form-data',
                'attribute'=>'gambar',
                'value'=>Html::img(Yii::$app->request->BaseUrl.'/uploads/' .$model->gambar,['alt'=>'some', 'class'=>'thing','width'=>'500px']),
                'format' => ['raw'],
            ],

            'time',
        ],
    ]) ?>

</div>
