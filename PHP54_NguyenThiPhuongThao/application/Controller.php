<?php
   class Controller{
      public $fileName=null;
      public $fileLayout = null;
      public $view = null;
       public function loadView($fileName,$data=null){
            if($data !=null)    extract($data);
            if(file_exists(("views/$fileName"))){
                $this->fileName = $fileName;
                // doc noi dung $fileName gan vao 1 bien
                ob_start();

                include "views/$fileName";

                $this->view =ob_get_contents();
            ob_end_clean();

            // ktra neu bien $this->fileLayout ok null thif include no
                //echo $this->fileLayout;
            if($this->fileLayout != null){ 
                
            include "views/$this->fileLayout";
            }
            else echo $this->view;

            }
       }

       //kiem tra dang nhap (su dung cho cac trang admin)
       public function authentication(){
           if(isset($_SESSION["email"]) == false)
           header("location:index.php?controller=login");
       }
   }
?>