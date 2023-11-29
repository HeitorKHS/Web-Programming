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

        public function addUser($name, $telephone, $email)
        {
            $this->userModel->addUser($name, $telephone, $email, 'Not Pay');
        }

        public function usersList()
        {
            $users = $this->userModel->getUsers();
            include '../views/User.php';
        }
        
        public function alterPayment($id, $payment)
        {
            if($payment === 'Not Pay') $this->userModel->alterPayment($id, 'Paid');
            else $this->userModel->alterPayment($id, 'Not Pay');
        }

    }

    

?>