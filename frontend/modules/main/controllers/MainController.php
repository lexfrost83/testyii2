<?php
namespace app\modules\main\controllers;

use frontend\models\Image;
use frontend\models\SignupForm;

class MainController extends \yii\web\Controller
{
    public $layout = "inner";

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRegister()
    {
        $model = new SignupForm();
        if($model->load(\Yii::$app->request->post()))
        {
            print_r($model->getAttributes());
            die;
        }
        return $this->render('register', ['model' => $model]);
    }
}
