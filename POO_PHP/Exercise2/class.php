<?php

    class Calculator
    {

        private $result;
        private $memory;

        public function __construct()
        {
            $this->result = 0;
            $this->memory = 0;     
        }

        public function reset()
        {
            $this->result = 0;
            $this->memory = 0;
        }

        public function undo()
        {
            $this->result = $this->memory;
        }

        public function getResult()
        {
            return $this->result;
        }

        public function sum($value)
        {
            $this->memory = $this->result;
            $this->result += $value;
        }

        public function subtract($value)
        {
            $this->memory = $this->result;
            $this->result -= $value; 
        }

        public function multiplication($value)
        {
            $this->memory = $this->result;
            $this->result *= $value;
        }

        public function divide($value)
        {
            $this->memory = $this->result;
            $this->result = $this->result/$value;
        }

        public function potential($value)
        {
            $this->memory = $this->result;
            $this->result = $this->result**$value;
        }

        public function percentage($value)
        {
            $this->memory = $this->result;
            $this->result = $this->result*$value/100;
        }

        public function root()
        {
            $this->memory = $this->result;
            $this->result = sqrt($this->result);
        }

    }
    
?>