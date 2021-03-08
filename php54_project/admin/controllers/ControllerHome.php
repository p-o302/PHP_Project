<?php
    class ControllerHome extends Controller{
        //ham tao
        public function __construct()
        {
            //ktra xem user da dang nhap chua
            $this->authentication();
        }
        public function index(){
            //load view
            $this->loadView("ViewHome.php");
        }
    }
?>  