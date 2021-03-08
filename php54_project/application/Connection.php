<?php
//class ket noi csdl
    class Connection{
        public static function getInstance(){
            //ketnoi csdl, tra kq ve bien ket noi
            $conn  =new PDO("mysql:host=localhost; dbname=php54_project;", "root", "");
            // mac dinh kieu duyet cac ban ghi
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            //lay dl theo kieu unicode
            $conn->exec("set names utf8");
            return $conn;
        }
    }
?>
