<?php
    //class ket noi csdl
    trait ModelChucDanh{
        //lay tat ca cac ban ghi, tra ve ket qua
        public function listChucDanh(){
            //lay bien ket noi
            $conn = Connection::getInstance();
            //thuc hien tru van sql
            $query = $conn->query("select * from chucdanh");
            // duyet tat ca cac ban ghi
            $result = $query->fetchAll();
            //tra ve
            return $result;
        }
    }
?>

<?php
    // class dieu khien MVC
    class ControllerChucDanh{
        //ket qua class ModelPhongBan
        use ModelChucDanh;
        public function index(){
            //goi ham tu model de lay ket qua tra ve
            $chucdanh = $this->listChucDanh();
            // goi view, truyen dl vao view
            include "ViewChucDanh.php";
        }
    }
?>
