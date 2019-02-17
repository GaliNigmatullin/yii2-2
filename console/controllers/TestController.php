<?php
namespace console\controllers;

use yii\console\Controller;
use yii\console\ExitCode;

class TestController extends Controller
{
    public function actionIndex()
    {
        return $this->stdout('Hello World console');
        return ExitCode::OK;
    }
}
