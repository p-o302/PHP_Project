<?php
    include "models/ModelHome.php";
    class controllerHome extends Controller{
        //ke thua model
        use ModelHome;
        public function index(){
            $this->loadView("ViewHome.php");
        }
    }
?>