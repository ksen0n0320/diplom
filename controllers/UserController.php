<?php

namespace app\controllers;

use app\models\User;
use app\models\UserSearch;
use Yii;
use yii\bootstrap5\ActiveForm;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
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
     * Lists all User models.
     *
     * @return string
     */
    public function actionIndex()
    {
        /*$searchModel = new UserSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);*/

        $searchModel = new UserSearch();
        if (Yii::$app->user->identity->admin==0) {
            $queryparams = array_merge($this->request->queryParams,['UserSearch'=> ['user_id' => Yii::$app->user->identity->id_user]]);
            $dataProvider = $searchModel->search($queryparams);
        }

        if (Yii::$app->user->identity->admin==1) {
            $dataProvider = $searchModel->search($this->request->queryParams);
        }

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionProfile(){
    $user=Yii::$app->user->identity;
    
    return $this->render('profile', ['model'=>$user]);
    }

    public function actionRules()
    {
        return $this->render('rules');
    }



    /**
     * Displays a single User model.
     * @param int $id_user Id User
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_user)
    {
        /*$model = $this->findModel($id_user);
        if($model->user_id != Yii::$app->user->id)
            $this->redirect(['index']);
        else
        return $this->render('view',[
            'model'=>$this->findModel($id_user),
        ]);*/

        return $this->render('view', [
            'model' => $this->findModel($id_user),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new User();

        //$model->status=1;

        /*if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
            } */

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save(false)) {
                return $this->redirect(['view', 'id_user' => $model->id_user]);
            }
            
            $model->password_hash = Yii::$app->security->generatePasswordHash($model->password);
            
            } else {
                $model->loadDefaultValues();
            }
            
            return $this->render('create', [
                'model' => $model,
            ]);
        
    }

        /*if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->user_id=Yii::$app->user->identity->id;
                $model->save(false);
                return $this->redirect(['view', 'id_user' => $model->id_user]);
            }
        } else {
            $model->loadDefaultValues();
        }*/

    

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_user Id User
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_user)
    {
        $model = $this->findModel($id_user);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_user' => $model->id_user]);
        }

        
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_user Id User
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_user)
    {
        $this->findModel($id_user)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_user Id User
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_user)
    {
        if (($model = User::findOne(['id_user' => $id_user])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
