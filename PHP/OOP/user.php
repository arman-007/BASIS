<?php
    class User{
        private $firstName = "";
        private $lastName = "";

        public function setFirstName($firstName = ""){
            $this -> firstName = $firstName;
        }

        public function setLastName($lastName = ""){
            $this -> lastName = $lastName;
        }

        public function getFirstName(){
            return $this -> firstName;
        }

        public function getLastName(){
            return $this -> lastName;
        }
        
        public function getFullName(){
            return $this -> firstName ." ". $this -> lastName;
        }

    }
    class ConstructUser{
        public $firstName = " ";
        public $lastName = " ";

        public function __construct($firstName, $lastName){
            $this -> firstName = $firstName;
            $this -> lastName = $lastName;
        }

        public function getFullName(){
            return $this -> firstName ." ". $this -> lastName;
        }
    }






?>