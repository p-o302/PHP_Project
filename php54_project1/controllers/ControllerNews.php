<?php
    // include file model vao đây
    include "models/ModelNews.php";
    class ControllerNews extends Controller{
        // kế thừa class Model
        use ModelNews;
        public function index(){
            // quy định số bản ghi trên 1 trang
            $recordPerPage = 10;
            // tính số trang
            $numPage = ceil($this->modelTotalRecord()/$recordPerPage);
            // lấy dữ liệu từ model
            $data = $this->modelRead($recordPerPage);
            //gọi view, truyền dữ liệu ra view
            $this->loadView("ViewNews.php", array("data"=>$data, "numPage"=>$numPage));
        }
        public function detail(){
            $record = $this->modelGetRecord();
            $this->loadView("ViewNewsDetail.php", array("record"=>$record));
        }
    }
?>