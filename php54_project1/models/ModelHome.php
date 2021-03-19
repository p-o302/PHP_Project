<?php
    trait ModelHome{
        // lay cac sp noi bat
         public function modelHotProduct(){
            $conn = Connection::getInstance();
            $query = $conn->query("select * from products where hot =1 order by id desc limit 0,6");
            return $query->fetchAll();
         }
         //lay cac danh muc chua co sp thi chuwa hien thi len
         public function modelCategories(){
            $conn = Connection::getInstance();
            $query = $conn->query("select * from categories where id in (select category_id from products) order by id desc");
            return $query->fetchAll();
         }
         //lay cac sp thuoc danh muc
         public function modelProducts($category_id){
            $conn = Connection::getInstance();
            $query = $conn->query("select * from products where category_id=$category_id  order by id desc limit 0,6");
            return $query->fetchAll();
         }
         //lay cac tin tuc noi bat

         public function modelHotNews(){
            $conn = Connection::getInstance();
            $query = $conn->query("select * from news where hot =1 order by id desc limit 0,6");
            return $query->fetchAll();
         }
    }
?>