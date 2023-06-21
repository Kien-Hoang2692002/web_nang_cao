
<h1>
   Danh sách sinh viên
</h1>
<a href="?action=create&controller=sinh_vien">
    Thêm sinh viên
</a> 
<table border="1" width = "100%">
    <tr>
        <th>Mã</th>
        <th>Tên</th>
        <th>Tên lớp</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach ($arr as $each) {?>
        <tr>
            <td><?php echo $each->getMa() ?></td>
            <td><?php echo $each->getTen() ?></td>
            <td><?php echo $each->getTen_lop() ?></td>
            <td>
                <a href="?action=edit&controller=sinh_vien&ma=<?php echo $each->getMa() ?>">
                        Sửa
                </a>
            </td>
            <td>
                <a href="?action=delete&controller=sinh_vien&ma=<?php echo $each->getMa() ?>">
                        Xóa
                </a>
            </td>
        </tr>
    <?php }?>
</table>


