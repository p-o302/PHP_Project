<?php
    include "models/ModelAccount.php";
    class ControllerAccount extends Controller{
        use ModelAccount;
        public function register(){
            $this->loadView("ViewRegister.php");
        }
        public function registerPost(){
            $this->modelRegister();
         
        }
        public function login(){
            $this->loadView("ViewLogin.php");
        }
        public function loginPost(){
            $this->modelLogin();
        }
        public function logout(){
            $this->modelLogout();
        }
    }
?>