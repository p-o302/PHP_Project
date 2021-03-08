<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        nav{
            width: 100%;
            margin: auto;
            margin-bottom: 30px;
            text-align: center;
        }
        nav ul{
            padding: 0px;
            margin: 0px;
            list-style: none;
        }
        nav ul li{
            display: inline;
            padding: 20px;
        }
    </style>
    <nav>
        <ul>
            <li><a href="index.php">trang chu</a></li>
            <li><a href="index.php?controller=PhongBan">Phong ban</a></li>
            <li><a href="index.php?controller=ChucDanh">Chuc danh</a></li>
        </ul>

    </nav>



    <fieldset style="width: 500px; margin:auto;">
        <legend>Layout</legend>
            <?php echo $this->view;?>
    </fieldset>
</body>
</html>