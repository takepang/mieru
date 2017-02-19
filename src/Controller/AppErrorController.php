<?php

namespace App\Controller;

use Cake\Controller\ErrorController;
use Cake\Event\Event;

/**
 * 独自のエラーコントローラー
 * Class AppErrorController
 * @package App\Controller
 */
class AppErrorController extends ErrorController
{
    /**
     * 描画前処理
     *
     * @param Event $event
     */
    public function beforeRender(Event $event)
    {
        // エラーの共通レイアウト名を指定
        // src/Template/Layout/error_layout.ctp
        $this->viewBuilder()->layout('error_layout');

        // エラーテンプレートパスを指定
        $this->viewBuilder()->templatePath('Error');
    }
}