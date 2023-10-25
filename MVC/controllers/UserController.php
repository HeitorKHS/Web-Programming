<?php

    require_once('../models/UserModel.php');

    class UserController
    {
        
        private $userModel;

        public function __construct(UserModel $userModel)
        {
            $this->userModel = $userModel;
            //$this->userModel = new User($banco);
        }

        public function usersList()
        {
            $users = $this->userModel->getUsers();
            include '../views/User.php';
        }
        
    }

    

?>