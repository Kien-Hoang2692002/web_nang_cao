
<h1>
   Danh sách lớp
</h1>
<a href="?action=create">
    Thêm lớp
</a> 
<table border="1" width = "100%">
    <tr>
        <th>Mã</th>
        <th>Họ Tên</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($arr as $each) {?>
        <tr>
            <td><?php echo $each->getMa() ?></td>
            <td><?php echo $each->getHoTen() ?></td>
            <td>
                <a href="?action=edit&ma=<?php echo $each->getMa() ?>">
                        Sửa
                </a>
            </td>
            <td>
                <a href="?action=delete&ma=<?php echo $each->getMa() ?>">
                        Xóa
                </a>
            </td>
        </tr>
    <?php }?>
</table>


