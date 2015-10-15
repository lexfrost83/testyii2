<?php
namespace app\modules\main\controllers;

use frontend\models\Image;
use frontend\models\SignupForm;
use yii\console\Response;
use yii\widgets\ActiveForm;

class MainController extends \yii\web\Controller
{
    public $layout = "inner";

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRegister()
    {
        if (\Yii::$app->request->isAjax && \Yii::$app->request->isPost) {
            \Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);

        }

        $model = new SignupForm();
        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            print_r($model->getAttributes());
            die;
        }
        return $this->render('register', ['model' => $model]);


    }
}
