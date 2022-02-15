<?php

use common\models\Berita;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */


?>
<br><br><br><br>
<div class="berita-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Berita', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'slug',
            'judul',
            
            [
                'class' => 'yii\grid\DataColumn',
                'header' => 'Gambar',
                'format' => 'raw',
                'value' => function($data){

                    return Html::img(Yii::$app->request->BaseUrl.'/uploads/' . $data['gambar'],['alt'=>'some', 'class'=>'thing','width'=>'500px']);
                 }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
