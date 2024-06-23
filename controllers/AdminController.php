<?php

namespace app\controllers;

use app\models\User;
use Yii;
class AdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function beforeAction($action)
    {
        if ((Yii::$app->user->isGuest) || (Yii::$app->user->identity->admin == 0)) {
            $this->redirect(['site/login']);
            return false;
        } else return true;
    }

    /*public function actionCreate() {
        $model = new User();
    
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->password = User::hashPassword($model->password); // Hash the password before you save it.
            if($model->save())
                return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('create', [
        'model' => $model,
        ]);
    }*/
}
