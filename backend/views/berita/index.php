<?php

use common\models\Berita;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Halaman Berita';
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

            'judul',
            'headline',
            [
                'class' => 'yii\grid\DataColumn',
                'header' => 'Gambar',
                'format' => 'raw',
                'value' => function($data){

                    return Html::img(Yii::$app->request->BaseUrl.'/uploads/' . $data['gambar']);
                 }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
