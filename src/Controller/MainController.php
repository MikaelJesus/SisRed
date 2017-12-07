<?php
namespace App\Controller;

use App\Controller\AppController;


class MainController extends AppController
{


    public function index(){
        
        if($this->request->session()->read('Auth.User.role_role_id')==3){
            return $this->redirect(['controller'=>'movrequerimientos','action'=>'index']);
        }
        // $permiso = $this->Users->find()->select(['role_id_role'])->where(['id_user' => $id]);
        // $this->set('permiso',$permiso);
        // $this->set('_serialize', ['permiso']);
        
    }
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Your username or password is incorrect.');
        }
    }
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['logout']);
    }

    public function logout()
    {
        $this->Flash->success('You are now logged out.');
        return $this->redirect($this->Auth->logout());
    }

    public function isAuthorized($user)
    {
        // All registered users can add articles
        if (in_array($this->request->action, ['add', 'delete','edit','index','view']) && ($user['role_role_id'] != null)) {
            return true;
        }
        return parent::isAuthorized($user);
    }

}