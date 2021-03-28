<?php
    trait ModelNews
        {
            // lấy về danh sách các bản ghi
            public function modelRead($recordPerPage)
            {
                // lấy biến page truyền từ URL
                $page = isset($_GET["page"]) && $_GET["page"] > 0 ? $_GET["page"] - 1 : 0;
                // lấy từ bản ghi nào
                $from = $page * $recordPerPage;
                //----
                // lấy biến kết nối csdl
                $conn = Connection::getInstance();
                // thực hiện truy vấn
                $query = $conn->query("select * from news order by id desc limit $from, $recordPerPage");
                // trả về nhiều bản ghi
                return $query->fetchAll();
            }
            // tính tổng số bản ghi
            public function modelTotalRecord()
            {
                // lấy biến kết nối csdl
                $conn = Connection::getInstance();
                // thực hiện truy vấn
                $query = $conn->query("select id from news ");
                // trả về số bản ghi
                return $query->rowCount();
            }
            // lấy 1 bản ghi tương ứng với id truyền vào
            public function modelGetRecord()
            {
                $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
                // lấy biến kết nối csdl
                $conn = Connection::getInstance();
                // thực hiện truy vấn
                $query = $conn->query("select * from news where id=$id");
                // trả về 1 bản ghi
                return $query->fetch();
            }
            public function modelGetCategory($category_id)
            {
                // lay bien ket noi csdl
                $conn = Connection::getInstance();
                //thuc hien truy van
                $query = $conn->query("select * from categories where id = $category_id");
                //tra ve 1 ban ghi
                return $query->fetch();
            }
        }
?>