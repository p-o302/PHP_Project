<?php
    //load ModelPhogBan.php
    include "models/ModelChucDanh.php";
    // class dieu khien MVC
    class ControllerChucDanh extends Controller{
        //ket qua class ModelPhongBan
        use ModelChucDanh;
        public function index(){
            //echo"a";
            //goi ham tu model de lay ket qua tra ve
            $chucdanh = $this->listChucDanh();
            // goi view, truyen dl vao view
           // include "views/ViewChucDanh.php";
           $this ->loadView("ViewChucDanh.php", array("chucdanh"=>$chucdanh));
        }
    }
?>
