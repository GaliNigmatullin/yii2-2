<?php

namespace common\modules\chat\controllers;

use common\modules\chat\components\Chat;
use Ratchet\Http\HttpServer;
use yii\console\Controller;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $server = IoServer::factory(
            new HttpServer(
                new WsServer(
                    new Chat()
                )
            ),
            8080
        );
        echo 'server';
        $server->run();
    }
}
