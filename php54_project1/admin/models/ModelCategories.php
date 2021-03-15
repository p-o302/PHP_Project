<?php
    trait ModelCategories{
        // lấy về danh sách các bản ghi
        public function modelRead($recordPerPage){
            // lấy biến page truyền từ URL
            $page = isset($_GET["page"])&&$_GET["page"]>0 ? $_GET["page"]-1 : 0;
            // lấy từ bản ghi nào
            $from = $page * $recordPerPage;
            //----
            // lấy biến kết nối csdl
            $conn = Connection::getInstance();
            // thực hiện truy vấn
            $query = $conn->query("select * from categories where parent_id=0 order by id desc limit $from, $recordPerPage");
            // trả về nhiều bản ghi
            return $query->fetchAll();
        }
        // tính tổng số bản ghi
        public function modelTotalRecord(){
            // lấy biến kết nối csdl
            $conn = Connection::getInstance();
            // thực hiện truy vấn
            $query = $conn->query("select id from categories where parent_id=0");
            // trả về số bản ghi
            return $query->rowCount();
        }
        // lấy 1 bản ghi tương ứng với id truyền vào
        public function modelGetRecord(){
            $id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
            // lấy biến kết nối csdl
            $conn = Connection::getInstance();
            // thực hiện truy vấn
            $query = $conn->query("select * from categories where id=$id");
            // trả về 1 bản ghi
            return $query->fetch();
        }
        public function modelUpdate(){
            $id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
            $name = $_POST["name"];
            $parent_id = $_POST["parent_id"];
            //update name
            // lay bien ket noi csdl
            $conn = Connection::getInstance();
            $query = $conn->prepare("update categories set name =:var_name, parent_id=:var_parent_id where id =$id");
            $query->execute(array("var_name"=>$name, "var_parent_id" =>$parent_id));
        }
        public function modelCreate(){
            $name = $_POST["name"];
            $parent_id = $_POST["parent_id"];
            // lay bien ket noi csdl
            $conn = Connection::getInstance();
            $query = $conn->prepare("insert categories set name =:var_name,  parent_id=:var_parent_id");
            $query->execute(array("var_name"=>$name, "var_parent_id"=>$parent_id));
           
          }
        public function modelDelete(){
            $id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
            // lay bien ket noi csdl
            $conn = Connection::getInstance();
            //thuc hien truy van
            $conn -> query("delete from categories where id = $id or parent_id = $id");
        }
        public function modelReadSub($categories_id){
            // lay bien ket noi csdl
            $conn = Connection::getInstance();
            //thuc hien truy van
            $query = $conn -> query("select * from categories where parent_id = $categories_id");
            return $query->fetchAll();
        }
        public function modelListCategories(){
            // lay bien ket noi csdl
            $conn = Connection::getInstance();
            //thuc hien truy van
            $query = $conn -> query("select * from categories where parent_id = 0 order by id desc");
            return $query->fetchAll();
        }
    }
?>