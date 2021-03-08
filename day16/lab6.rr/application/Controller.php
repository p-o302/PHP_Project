<?php
   class Controller{
      public $fileName=null;
      public $fileLayout = null;
       public function loadView($fileName,$data=null){
            if($data !=null)    extract($data);
            if(file_exists(("views/$fileName"))){
                $this->fileName = $fileName;
                include"views/$fileName";
            }
       }
   }
?>