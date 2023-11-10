<?php

    require_once('../models/HorseModel.php');

    class HorseController
    {
        
        private $horseModel;

        public function __construct(HorseModel $horseModel)
        {
            $this->horseModel = $horseModel;
            //$this->userModel = new User($banco);
        }

        public function addHorse($name, $race, $color, $sex)
        {
            $this->horseModel->addHorse($name, $race, $color, $sex);
        }

        public function horsesList()
        {
            $horses = $this->horseModel->getHorses();
            include '../views/Horse.php';
        }
        
        public function deleteHorse($id)
        {
            $this->horseModel->deleteHorse($id);
        }

        public function alterHorse($id, $name, $race, $color, $sex)
        {
            $this->horseModel->alterHorse($id, $name, $race, $color, $sex);
        }

    }

    

?>