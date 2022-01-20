<?php

use common\models\Berita;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Beritas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="berita-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Berita', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_berita',
            'judul',
            'headline',
            'gambar',
            [
                'class' => 'yii\grid\DataColumn',
                'header' => 'Gambar',
                'format' => 'raw',
                'value' => function($data){
                    return "<img width='104px' src='".Url::to(['blog/view-gambar','nama'=>$data->gambar])."'>";
                 }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
