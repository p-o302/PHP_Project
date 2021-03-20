<?php
    // include file model vao đây
    include "models/ModelProducts.php";
    class ControllerProducts extends Controller{
        // kế thừa class Model
        use ModelProducts;
        public function category(){

            $category_id = isset($_GET["id"]) ? $_GET["id"] : 0;
            // quy định số bản ghi trên 1 trang
            $recordPerPage = 10;
            // tính số trang
            $numPage = ceil($this->modelTotalRecord()/$recordPerPage);
            // lấy dữ liệu từ model
            $data = $this->modelRead($recordPerPage);
            //gọi view, truyền dữ liệu ra view
            $this->loadView("ViewCategory.php", array("data"=>$data, "numPage"=>$numPage, "category_id"=>$category_id));
        }
        //chi tiet san pham
        public function detail(){
            $record  = $this-> modelGetRecord();
            $this->loadView("ViewDetail.php", array("record"=>$record));
        }
        //rating
        public function rating(){
            $id = isset($_GET["id"]) ? $_GET["id"] : 0;
            $this->modelRating();
            header("location:index.php?controller=products&action=detail&id=$id");
        }
    }

?>