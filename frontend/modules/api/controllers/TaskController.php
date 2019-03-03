<?php


namespace frontend\modules\api\controllers;


use frontend\modules\api\models\Task;
use yii\rest\ActiveController;

class TaskControllerc extends ActiveController
{
    public $modelClass = Task::class;
}