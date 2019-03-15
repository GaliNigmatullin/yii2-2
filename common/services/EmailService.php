<?php

namespace common\services;
use yii\base\Component;
class EmailService extends Component
{
    /**
     * @param $to
     * @param $subject
     * @param $views
     * @param $viewHTML
     * @param $viewText
     * @param $data
     */
    function send($to, $subject, $views, $data)
    {
        \Yii::$app
            ->mailer
            ->compose($views, $data)
            ->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name . ' robot'])
            ->setTo($to)
            ->setSubject($subject)
            ->send();
    }
}