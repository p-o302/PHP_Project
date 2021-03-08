<?php
    // neu muon load layout vao MVC thi thuc hien nhu sau
    $this->fileLayout = "layout.php";
?>


<fieldset style="width: 500px;; margin: auto;">
    <legend>Danh sach phong ban</legend>
    <table cellpadding="5" border="1" style="border-collapse: collapse; width: 100%;">
        <tr><th>Ten phong ban</th></tr>
        <?php foreach($phongban as $rows): ?>
        <tr>
        <td><?php echo $rows->tenphongban;?></td></tr>
        <?php endforeach?>
    </table>

</fieldset>