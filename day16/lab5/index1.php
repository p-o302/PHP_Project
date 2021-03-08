<?php
    //co the doc noi dung cua  file de nem toan bo noi dung trogn file vao 1 bien
    // bat dau doc noi dung
    ob_start();
        // load file can doc vao day
        include "ViewText2.php";
        //doc noi dung nem vao 1 bien
        $content = ob_get_contents();
        //huy tien trinh
        ob_get_clean();
?>

<?php
    //xuat noi dung cua bien $content = noi dung cuar file ViewText2.php
    echo $content;
?>