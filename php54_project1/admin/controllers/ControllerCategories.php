<?php
    // include file model vao đây
    include "models/ModelCategories.php";
    class ControllerCategories extends Controller{
        // kế thừa class Model
        use ModelCategories;
        public function index(){
            // quy định số bản ghi trên 1 trang
            $recordPerPage = 4;
            // tính số trang
            $numPage = ceil($this->modelTotalRecord()/$recordPerPage);
            // lấy dữ liệu từ model
            $data = $this->modelRead($recordPerPage);
            //gọi view, truyền dữ liệu ra view
            $this->loadView("ViewCategories.php", array("data"=>$data, "numPage"=>$numPage));
        }
        public function update(){
            $id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
            // lấy 1 bản ghi
            $record = $this->modelGetRecord();
            // tạo biến action để biết được khi ấn nút submit sẽ dẫn đến đâu
            $action = "index.php?controller=categories&action=updatePost&id=$id";
            // gọi view, truyền dữ liệu ra view
            $this->loadView("ViewFormCategories.php", array("record"=>$record, "action"=>$action));
        }
        public function updatePost(){
            $id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
            //goi ham modelUpdate de update ban ghi
            $this->modelUpdate();
            //quay tro laji trang user
            header("location:index.php?controller=categories");
        }
        public function create(){
            $id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
            // lấy 1 bản ghi
            $record = $this->modelGetRecord();
            // tạo biến action để biết được khi ấn nút submit sẽ dẫn đến đâu
            $action = "index.php?controller=categories&action=createPost&id=$id";
            // gọi view, truyền dữ liệu ra view
            $this->loadView("ViewFormCategories.php", array("record"=>$record, "action"=>$action));
        }
        public function createPost(){
            $id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
            //goi ham modeCreate de create ban ghi
            $this->modelCreate();
            //quay tro laji trang user
            header("location:index.php?controller=categories");
        }
        public function delete(){
            $id = isset($_GET["id"])&&$_GET["id"] > 0 ? $_GET["id"] : 0;
            //goi ham modeCreate de create ban ghi
            $this->modelDelete();
            //quay tro laji trang user
            header("location:index.php?controller=categories");
        }
    }
?>