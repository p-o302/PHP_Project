<?php
    trait ModelUsers{
        //lay ve danh sach cac banghi
        public function modelRead($from, $recordPerPeage){

        }
        //tinh tong so ban ghi
        public function modelToralRecord(){
            //lay bien csdl
            $conn = Connection::getInstance();
            //thuc ihen truy van
            $query = $conn->query("select id from users");
            //tra ve so ban ghi
            return $query->rowCount();
        }
    }
?>