<?php

namespace app\controllers;

use app\models\Pet;
use app\models\PetSearch;
use app\models\UploadForm;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PetController implements the CRUD actions for Pet model.
 */
class PetController extends Controller
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
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Pet models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PetSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCatalog()
    {
        return $this->render('catalog');
    }

    public function actionCat()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Pet::find(),
        ]);
        $catt = Pet::findAll(['category_id'=>1]);
        return $this->render('cat', [
            'dataProvider' => $dataProvider,
            'catt' => $catt,
        ]);
        
    }

    public function actionDog()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Pet::find(),
        ]);
        $dogg = Pet::findAll(['category_id'=>2]);
        return $this->render('dog', [
            'dataProvider' => $dataProvider,
            'dogg' => $dogg,
        ]);
    }

    /**
     * Displays a single Pet model.
     * @param int $id_pet Id Pet
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_pet)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_pet),
        ]);
    }

    /**
     * Creates a new Pet model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $UploadForm = new UploadForm();
        $model = new Pet();

        if (Yii::$app->request->isPost){
            $UploadForm->imageFile = UploadedFile::getInstance($model, 'photo');
            
            if ($UploadForm->upload()){
                
            }
        }
        if ($this->request->isPost) {
            if ($model->load($this->request->post())){
                $model->photo = $UploadForm->imageFile;
                $model->save(false);
                return $this->redirect(['view', 'id' => $model->id_pet]);
            }
        } else {
            //$model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pet model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_pet Id Pet
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_pet)
    {
        $model = $this->findModel($id_pet);

        /*if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_pet' => $model->id_pet]);
        }*/

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_pet]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pet model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_pet Id Pet
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_pet)
    {
        $this->findModel($id_pet)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pet model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_pet Id Pet
     * @return Pet the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_pet)
    {
        if (($model = Pet::findOne(['id_pet' => $id_pet])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
