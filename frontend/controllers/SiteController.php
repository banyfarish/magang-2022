<?php

namespace frontend\controllers;

use common\models\Berita;
use common\models\Jsholat;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return mixed
     */

    public function actionIndex()
    {
        $news = Berita::find()->all();
        $model = new Jsholat();
        $jadwal = null;
        $jadwal = $model->getJsholat();
        return $this->render('index', [
            'news'=> $news,
            'model' => $model, 
            'jadwal' => $jadwal
        ]);
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        return $this->render('contact', ['model' ]);
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        $db = Yii::$app->db;
        $about = $db->createCommand ('SELECT * FROM about WHERE id_about =1')
        ->queryAll();
        

        return $this->render('about', ['about'=> $about]);
    }
}
