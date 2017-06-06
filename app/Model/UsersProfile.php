<?php
    App::uses('Appmodel', 'model' );
    class UsersProfile extends AppModel{
        public $useTable = 'users_profile';
        public $primaryKey = 'id';

        public $validate = array(
            ''
        );

        public $validationErrors = array();




    }


?>