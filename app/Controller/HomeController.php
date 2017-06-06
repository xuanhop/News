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
        parent::beforeFilter();
        $this->Auth->allow('add');
    }
    public function index(){
    }

    public function register(){
        $this->layout=null;
        if($this->request->is('post')) {
            $userData = array(
                'username' => $this->data['Users']['username'],
                'password' => $this->data['Users']['password']
            );
            if ($this->userprofile->save($userData)) {
                $profileData = array(
                    'ho_ten' => $this->data['UsersProfile']['name'],
                    'email' => $this->data['UsersProfile']['email'],
                    'address' => $this->data['UsersProfile']['Address'],
                    'phone' => $this->data['UsersProfile']['phone'],
                    'ngay_sinh' => $this->data['UsersProfile']['DOB'],
                    'gioi_tinh' => $this->data['UsersProfile']['Gender'],
                );
            }

        }
    }


    public function beforeSave(){

    }

    public function validate(){

    }

    public function login(){

    }
}
?>

