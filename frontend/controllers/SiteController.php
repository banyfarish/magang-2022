<?php

namespace frontend\controllers;

use common\models\Berita;
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
