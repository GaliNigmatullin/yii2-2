<?php
namespace backend\controllers;

use yii\web\Controller;



class TestController extends Controller
{
    public function actionIndex()
    {
        return $this->renderContent('Hello World back');
    }
}
