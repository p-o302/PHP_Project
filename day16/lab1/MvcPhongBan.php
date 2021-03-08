<?php
//class ket noi csdl
    class Connection{
        public static function getInstance(){
            //ketnoi csdl, tra kq ve bien ket noi
            $conn  =new PDO("mysql:host=localhost; database=php54_database;", "root", "");

            // mac dinh kieu duyet cac ban ghi
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            //lay dl theo kieu unicode
            $conn->exec("set manes utf8");
            return $conn;
        }
    }
?>

<?php
    //class ket noi csdl
    trait ModelPhongBan{
        //lay tat ca cac ban ghi, tra ve ket qua
        public function listPhongBan(){
            //lay bien ket noi
            $conn = Connection::getInstance();
            //thuc hien tru van sql
            $query = $conn->query("select * from phongban");
            // duyet tat ca cac ban ghi
            $result = $query->fetchAll();
            //tra ve
            return $result;
        }
    }
?>

<?php
    // class dieu khien MVC
    class ControllerPhongBan{
        //ket qua class ModelPhongBan
        use ModelPhongBan;
        public function index(){
            //goi ham tu model de lay ket qua tra ve
            $phongban = $this->listPhongBan();
            // goi view, truyen dl vao view
            include "ViewPhongBan.php";
        }
    }
?>
