<?php
    //load file Connectiom
    include "Connection.php";

?>

<?php
    include "MvcPhongBan.php";
    //khoi tao bject cua class Controller
    $obj = new ControllerPhongBan();
    // goi ham index trong class ControllerPhongBan
    $obj->index();
?>


<?php
    include "MvcChucDanh.php";
    //khoi tao bject cua class Controller
    $obj = new ControllerChucDanh();
    // goi ham index trong class ControllerPhongBan
    $obj->index();
?>