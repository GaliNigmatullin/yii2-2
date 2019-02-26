<?php
namespace common\modules\chat\widgets;

use yii\bootstrap\Widget;

class Chat extends Widget
{
    public $port = 8080;

    public function init(){

    }

    public function run(){
        $this->view->registerJsVar('wsPort', $this->port);
        $this->view->registerJsFile('/js/chat.js');
        return $this->render('chat');
    }
}