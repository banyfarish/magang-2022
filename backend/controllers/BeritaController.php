<?php

namespace backend\controllers;

use Yii;
use yii\web\UploadedFile;
use common\models\Berita;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BeritaController implements the CRUD actions for Berita model.
 */
class BeritaController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST','GET'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Berita models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Berita::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'id_berita' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Berita model.
     * @param int $id_berita Id Berita
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Berita model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Berita();
        $generate = Yii::$app->security->generateRandomString(12);
        
        if ($model->load(Yii::$app->request->post())) { 
            
            $gambar= UploadedFile::getInstance($model, 'gambar');
            $model->gambar = $generate.'.'. $gambar->extension;
            if ($model->save())
            {
                $gambar->saveAs(yii::$app->basePath . '/web/uploads/' . $generate .'.'. $gambar->extension );
            }
            return $this->redirect(['index']);
        } 
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Berita model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_berita Id Berita
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $generate = Yii::$app->security->generateRandomString(12);

        if ($model->load(Yii::$app->request->post())) {
            $gambar= UploadedFile::getInstance($model, 'gambar',);
            $model->gambar = $generate.'.'. $gambar->extension;
            // var_dump($model->gambar);
            // die;
            if ($model->save()) {
                $gambar->saveAs(yii::$app->basePath . '/web/uploads/' . $generate.'.'. $gambar->extension);
            }
            
            return $this->redirect(['index']);
        } 

        return $this->render('update', [
            'model' => $model,

        ]);
    }

    /**
     * Deletes an existing Berita model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_berita Id Berita
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = Berita::findOne($id);

        if ($model->delete(Yii::$app->request->post())) {
        unlink($model->basepath .'/web/uploads/' . $model->id );
        $model->delete();
        
        }
        // $model = $this->findModel($id);
        // if(Yii::$app->request->isPostRequest){
        //     unlink(Yii::$app->basePath . '/web/uploads/' . $id->extension);			
		// 	$this->loadModel($id)->delete();            
        // }
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Berita model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_berita Id Berita
     * @return Berita the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Berita::findOne(['id_berita' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
