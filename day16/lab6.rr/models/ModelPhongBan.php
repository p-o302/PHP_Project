
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
