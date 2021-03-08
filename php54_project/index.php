<?php
    session_start();
    //load file Connection
    include "../application/Connection.php";
    include "../application/Controller.php";
?>

<?php
    // //de MVC hoat dong thi include file Controller cua MVC do
    // include "controllers/ControllerPhongBan.php";
    // // khoi tao object cua class controller
    // $obj = new ControllerPhongBan();
    // //goi ham index trong class ControllerPhongBan
    // $obj->index();


    //lay bien cotroller truyen tu url
    $controller = isset($_GET["controller"])?$_GET["controller"]:"Home";
    $action = isset($_GET["action"])?$_GET["action"]:"index";

    //tao duong dan vat ly cua file controller trong mvc
    $controllerFile="controllers/Controller".$controller.".php";
    
    if(file_exists($controllerFile)){
        include $controllerFile;
        $controllerClass = "Controller".$controller;
        //khoi tao object cua class

        $obj= new $controllerClass();
        //echo "ok";
        // goi den action

        $obj->$action();
    }
    else die ("File controller ko ton tai");


?>
<?php
    // //de MVC hoat dong thi include file Controller cua MVC do
    // include "controllers/ControllerChucDanh.php";
    // // khoi tao object cua class controller
    // $obj = new ControllerChucDanh();
    // //goi ham index trong class ControllerChucDanh
    // $obj->index();
?>