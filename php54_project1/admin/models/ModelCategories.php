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
            $query = $conn->query("select * from categories order by id desc limit $from, $recordPerPage");
            // trả về nhiều bản ghi
            return $query->fetchAll();
        }
        // tính tổng số bản ghi
        public function modelTotalRecord(){
            // lấy biến kết nối csdl
            $conn = Connection::getInstance();
            // thực hiện truy vấn
            $query = $conn->query("select id from categories");
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
            $password = $_POST["password"];
            //update name
            // lay bien ket noi csdl
            $conn = Connection::getInstance();
            $query = $conn->prepare("update categories set name =:var_name where id =$id");
            $query->execute(array("var_name"=>$name));
            //neu password ko rong thi update password
            if($password != ""){
                //ma hoa password
                $password = md5($password);
                $query = $conn->prepare("update categories set password =:var_password where id = $id");
                $query->execute(array("var_password"=>$password));
            }
        }
        public function modelCreate(){
            $id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            //ma hoa password
             $password = md5($password);
            // lay bien ket noi csdl
            $conn = Connection::getInstance();
            $query = $conn->prepare("insert categories set name =:var_name, email =:var_email, password=:var_password");
            $query->execute(array("var_name"=>$name,"var_email"=>$email, "var_password"=>$password));
           
          }
        public function modelDelete(){
            $id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
            // lay bien ket noi csdl
            $conn = Connection::getInstance();
            //thuc hien truy van
            $conn -> query("delete from categories where id = $id");
        }
    }
?>