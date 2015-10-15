<?php
namespace app\modules\main\controllers;

use frontend\models\Image;

class MainController extends \yii\web\Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionRegister()
    {
        $model = new SignupForm;

        if($model->load(\Yii::$app->request->post()))
        {
            print_r($model->getAttibutes());
            die;
        }
    }
}
