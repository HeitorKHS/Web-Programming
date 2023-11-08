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

        public function addUser($name, $cpf, $password)
        {
            $this->userModel->addUser($name, $cpf, $password);
        }

        public function usersList()
        {
            $users = $this->userModel->getUsers();
            include '../views/User.php';
        }
        
        public function deleteUser($id)
        {
            $this->userModel->deleteUser($id);
        }

        public function alterUser($id, $name, $cpf, $password)
        {
            $this->userModel->alterUser($id, $name, $cpf, $password);
        }

    }

    

?>