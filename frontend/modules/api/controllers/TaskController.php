<?php


namespace frontend\modules\api\controllers;


use frontend\modules\api\models\Task;
use yii\rest\Controller;

class TaskController extends Controller
{
    public $modelClass = Task::class;
}