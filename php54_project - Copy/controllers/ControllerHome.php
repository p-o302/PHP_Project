<?php
    class ControllerHome extends Controller{
        public function index(){
            // goi view
            $this->loadView("ViewHome.php");
        }
    }
?>