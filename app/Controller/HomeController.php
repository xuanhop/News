<?php
/**
 * Created by PhpStorm.
 * User: Xuan_Hop
 * Date: 4/22/2017
 * Time: 10:59 PM
 */
class HomeController extends AppController{
    var $name='User';
    var $scaffold;

    public function index(){

    }

    public function register(){
        $this->layout=null;
        if(!empty($this->data)){
            if ($this->data['User']['password'] == $this->Auth->password($this->data['User'],['password_confirm'])){
                $this->User->create();
                if ($this->User->Save($this->data)){
                    $this->Auth->login($this->data);
                    $this->redirect(array('action'=>'index'));
                }
            }
        }
    }
    public function logout(){
        $this->redirect($this->Auth->logout());
    }
    public function login(){

    }

}