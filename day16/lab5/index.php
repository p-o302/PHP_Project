<?php 
    function sayHello($str1,$str2=null){
        echo "<h3>$str1- $str2</div></h3>";
    }
    sayHello("Hello"); // str1 = hello , str2 - null
    sayHello("hello", "2021"); // str1= hello, str2=2021
?>

<?php
    //load file vafo file hien tai bawng ham loadfile
    function loadView($fileName, $data){
        if(file_exists($fileName)){
            /*
                ham extract su dung hco array, se bien ten key thanh ten biben

                extract(array("hoten"=>"Nguyen Van A", "email"=>"nva@gmail.com"))

                khi do $hoten = "Nguyen Van A", $email = "nva@gmail.com"
            */
            extract($data);
            include $fileName;
        }
    }
    // truyen file ViewText1.php vao ham loadView
    loadView("ViewText1.php", array("hoten"=>"Nguyen Van A", "email"=>"nva@gmail.com"));
?>