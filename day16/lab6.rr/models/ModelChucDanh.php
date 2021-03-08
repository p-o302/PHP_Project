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
