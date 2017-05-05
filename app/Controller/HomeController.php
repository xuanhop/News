<?php
App::uses('AppController','Controller');
/**
 * Created by PhpStorm.
 * User: Xuan_Hop
 * Date: 4/22/2017
 * Time: 10:59 PM
 * @property userprofile userprofile
 */
class HomeController extends AppController{
    public function beforeFilter(){

    }
    public function index(){
    }

    public function register(){
        $this->layout=null;
        if($this->request->is('post')){
            $userData = array(
                'username' => $this->data['userprofile']['username'],
                'password' => $this->data['userprofile']['password']
            );
            if($this->userprofile->save($userData)){
                $profileData = array(
                  '' => $this->Data['userprofile']['ho_ten']
                );
            }

        }

    }

    public function validate(){

    }

    public function login(){

    }
}
?>