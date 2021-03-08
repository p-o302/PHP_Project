<fieldset style="width: 500px;; margin: auto;">
    <legend>Danh sach chuc danh</legend>
    <table cellpadding="5" border="1" style="border-collapse: collapse; width: 100%;">
        <tr><th>Ten phong ban</th></tr>
        <?php foreach($chucdanh as $rows): ?>
        <tr>
        <td><?php echo $rows->tenchucdanh;?></td></tr>
        <?php endforeach?>
    </table>

</fieldset>