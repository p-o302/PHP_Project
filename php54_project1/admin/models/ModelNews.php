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
            public function modelUpdate()
            {
                $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
                $name = $_POST["name"];
                $description = $_POST["description"];
                $content = $_POST["content"];
                $hot = isset($_POST["hot"]) ? 1 : 0; // co hot hay ko
                //update name
                // lay bien ket noi csdl
                $conn = Connection::getInstance();

                $query = $conn->prepare("update news set name =:var_name, description =:var_description , content =:var_content, hot =:var_hot where id = $id");

                $query->execute(array("var_name" => $name, "var_description" => $description, "var_content" => $content, "var_hot" => $hot));
                //=====
                //neu viewers upload anh thi thuc hien update
                $photo = "";
                if ($_FILES["photo"]["name"] != "") {
                    //======
                    // lay anh cux de xoa
                    $oldPhoto = $conn->query("select photo from news where id = $id");
                    if ($oldPhoto->rowCount() > 0) {
                        $record = $oldPhoto->fetch();
                        // xoa anh
                        if ($record->photo != "" && file_exists("../assets/upload/news/" . $record->photo))
                            unlink("../assets/upload/news/" . $record->photo);
                    }

                    //=======
                    $photo = time() . "_" . $_FILES["photo"]["name"];

                    move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/news/$photo");

                    $query = $conn->prepare("update news set photo =:var_photo where id = $id");

                    $query->execute(array("var_photo" => $photo));
                }
            }
            public function modelCreate()
            {
                $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
                $name = $_POST["name"];
                $description = $_POST["description"];
                $content = $_POST["content"];
                $hot = isset($_POST["hot"]) ? 1 : 0; // co hot hay ko
                $photo = "";
                if ($_FILES["photo"]["name"] != "") {
                    $photo = time() . "_" . $_FILES["photo"]["name"];

                    move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/news/$photo");
                }
                //update name
                // lay bien ket noi csdl
                $conn = Connection::getInstance();

                $query = $conn->prepare("insert news set name =:var_name, description =:var_description , content =:var_content, hot =:var_hot, photo =:var_photo ");

                $query->execute(array("var_name" => $name, "var_description" => $description, "var_content" => $content, "var_hot" => $hot, "var_photo" => $photo));
            }
            public function modelDelete()
            {
                $id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
                // lay bien ket noi csdl
                $conn = Connection::getInstance();
                //======
                // lay anh cux de xoa
                $oldPhoto = $conn->query("select photo from news where id = $id");
                if ($oldPhoto->rowCount() > 0) {
                    $record = $oldPhoto->fetch();
                    // xoa anh
                    if ($record->photo != "" && file_exists("../assets/upload/news/" . $record->photo))
                        unlink("../assets/upload/news/" . $record->photo);
                }

                //=======
                //thuc hien truy van
                $conn->query("delete from news where id = $id ");
            }
            public function modelReadCategorySub($category_id)
            {
                // lay bien ket noi csdl
                $conn = Connection::getInstance();
                //thuc hien truy van
                $query = $conn->query("select * from categories where parent_id = $category_id");
                return $query->fetchAll();
            }
            public function modelListCategories()
            {
                // lay bien ket noi csdl
                $conn = Connection::getInstance();
                //thuc hien truy van
                $query = $conn->query("select * from categories where parent_id = 0 order by id desc");
                return $query->fetchAll();
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