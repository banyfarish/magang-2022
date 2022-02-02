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

    public function actionJsholat()
    {
        $model = new Jsholat();
        $jadwal = null;
        if ($model->load(\Yii::$app->request->get(), '') && $model->validate()) {
            $jadwal = $model->getJsholat();
        }
        return $this->render('jsholat', ['model' => $model, 'jadwal' => $jadwal]);
    }

    public function actionIndex()
    {
        $news = Berita::find()->all();

        return $this->render('index', ['news'=> $news]);
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
