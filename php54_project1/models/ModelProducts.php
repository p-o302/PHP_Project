<?php
    trait ModelProducts{
        // lấy các sản phẩm thuộc danh mục
        public function modelRead($recordPerPage){
            $category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//lay bien page truyen tu url
			$page = isset($_GET["page"])&&$_GET["page"]>0 ? $_GET["page"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where category_id = $category_id order by id desc limit $from, $recordPerPage");
			//tra ve nhieu ban ghi
			return $query->fetchAll();
			//--- 
		}
		//tinh tong so ban ghi
		public function modelTotalRecord(){
            $category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select id from products where category_id=$category_id");
			//tra ve so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi tuong ung voi id truyen vao
		public function modelGetRecord(){
			$id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from products where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}

        //rating
        public function modelRating(){
            $id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
            $star = isset($_GET["star"])&&$_GET["star"] > 0 ? $_GET["star"] : 0;
            $conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("insert into rating set product_id=$id, star=$star");
        }
        //lay so sao
        public function modelGetStar($product_id,$star){
            $conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select id from rating where product_id=$product_id and star=$star");
            return $query->rowCount();
       }
    }

    ?>
