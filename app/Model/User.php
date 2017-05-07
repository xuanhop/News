<?php

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel{
    public $useTable = 'users';
    public $primaryKey = 'id';

    public function beforeSave($options = array()) {
        if (!empty($this->data[$this->alias]['password'])) {
            $passwordHasher = new SimplePasswordHasher(array('hashType' => 'sha256'));
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        return true;

    }
    public $validate = array(
        ''
    );
}