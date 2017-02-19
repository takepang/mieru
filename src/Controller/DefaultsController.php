<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Error\NotFoundException;
use Cake\Event\Event;

/**
 * Defaults Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class DefaultsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function top()
    {
    }

    public function beforeFilter(Event $event){
        // 上位クラスの機能を使用
        parent::beforeFilter($event);
        $this->Auth->allow('top');

    }
}
