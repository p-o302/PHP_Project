<?php

    //load file Connection
    include "application/Connection.php";
?>

<?php
    //de MVC hoat dong thi include file Controller cua MVC do
    include "controllers/ControllerPhongBan.php";
    // khoi tao object cua class controller
    $obj = new ControllerPhongBan();
    //goi ham index trong class ControllerPhongBan
    $obj->index();
?>
<?php
    //de MVC hoat dong thi include file Controller cua MVC do
    include "controllers/ControllerChucDanh.php";
    // khoi tao object cua class controller
    $obj = new ControllerChucDanh();
    //goi ham index trong class ControllerChucDanh
    $obj->index();
?>