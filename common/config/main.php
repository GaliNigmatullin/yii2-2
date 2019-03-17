<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
        'chat' => \common\modules\chat\Module::class,
        'comment' => [
            'class' => 'yii2mod\comments\Module',

        ]
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'emailService' => ['class' => common\services\EmailService::class],
        'taskService' => ['class' => common\services\TaskService::class],
        'projectService' => [
            'class' => common\services\ProjectService::class,
            'on ' . \common\services\ProjectService::EVENT_ASSIGN_ROLE =>
                function (\common\services\AssignRoleEvent $e) {
                    //Yii::info(\common\services\ProjectService::EVENT_ASSIGN_ROLE,'_');
                    $views = ['html' => 'assignRoleToProject-html', 'text' => 'assignRoleToProject-text'];
                    $data = ['user' => $e->user, 'project' => $e->project, 'role' => $e->role];
                    Yii::$app->emailService->send($e->user->email, "New role" . $e->role, $views, $data);
                }
        ],
        'i18n' => [
            'translations' => [
                'yii2mod.comments' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@yii2mod/comments/messages',
                ],
            ],
        ],
    ],


];
