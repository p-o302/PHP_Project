<fieldset style="width: 500px;; margin: auto;">
    <legend>Danh sach phong ban</legend>
    <table cellpadding="5" border="1" style="border-collapse: collapse;">
        <tr><th>Ten phong ban</th></tr>
        <?php foreach($phongban as $rows): ?>
        <tr>
        <td><?php echo $rows->tenphongban;?></td></tr>
        <?php endforeach?>
    </table>

</fieldset>