<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Employee;
use yii\web\Controller;

class AppController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionEmployee()
    {
        $model = new Employee();
        // if ($model->load(Yii::$app->request->post()) && $model->daftar()) {
        //     Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
        //     return $this->goHome();
        // }
        $post = Yii::$app->request->post();
        if ($post) {
            var_dump($post);
            die;
        }

        return $this->render('employee', [
            'model' => $model,
        ]);
        // return $this->render('employee');
    }
}
