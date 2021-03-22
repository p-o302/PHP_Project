<?php
    trait ModelAccount{
        public function modelRegister(){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $address = $_POST["address"];
            $phone = $_POST["phone"];
            $password = $_POST["password"];
            //ma hoa password
            $password = md5($password);
            //---------
            $conn = Connection::getInstance();
            //neu email chua ton tai thi insert ban ghi
            $queryCheck = $conn->prepare("select email from customers where email =:var_email");
            $queryCheck->execute(array("var_email"=>$email));

            if( $queryCheck -> rowCount() > 0){
                header("location:index.php?controller=account&action=register&notify=error");
            }
            else{
                //insert ban ghi
                $query = $conn->prepare("insert into customers set name=:var_name, email=:var_email, address=:var_address, phone =:var_phone, password=:var_password");
                $query = $query->execute(array("var_name"=>$name, "var_email"=>$email, "var_address"=>$address, "var_phone"=>$phone, "var_password"=> $password));
                header("location:index.php?controller=account&action=login");
            }
        }

        //=========

        public function modelLogin(){
            $email = $_POST["email"];
            $password = $_POST["password"];
            //ma hoa password
            $password = md5($password);
            //---------
            $conn = Connection::getInstance();
            $query = $conn->prepare("select id, email, password from custmers where email=:var_email");
            $query->execute(array("var_email"=>$email));
            if($query->rowCount() > 0){
                $result = $query->fetch();
                if($password == $result->password){
                    $_SESSION["customer_id"] = $result->id;
                    $_SESSION["customer_email"]  = $result->email;
                    header("location: index.php");
                }
                else{
                    header("location:index.php?controller=account&action=login");
                }
            }
        }
    
        //=====

        public function modelLogout(){
            unset($_SESSION["customer_id"]);
            unset($_SESSION["customer_email"]);
            header("location:index.php?controller=account&action=login");
        }
    }
?>