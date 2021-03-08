<?php
    //load ModelPhogBan.php
    include "models/ModelPhongBan.php";
    // class dieu khien MVC
    class ControllerPhongBan{
        //ket qua class ModelPhongBan
        use ModelPhongBan;
        public function index(){
            //goi ham tu model de lay ket qua tra ve
            $phongban = $this->listPhongBan();
            // goi view, truyen dl vao view
            include "views/ViewPhongBan.php";
        }
    }
?>
