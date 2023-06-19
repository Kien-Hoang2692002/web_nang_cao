



<form action="?action=update&controller=<?php echo $controller;?>" method="POST">
    <input type="hidden" name="ma" value="<?php echo $each['ma']?>">
    Tên
    <input type="text" name="ten" value="<?php echo $each['ten']?>">
    <br>
    Lớp
    <select name="ma_lop">
        <?php foreach($lops as $lop):?>
            <option value="<?php echo $lop['ma']?>" <?php if($lop['ma'] === $each['ma_lop']) echo "seleted" ?>>
                <?php echo $lop['ten'];?>
            </option>
        <?php endforeach ?>
    </select>
    <br>
    <button>Sửa sinh viên</button>
</form>