
<form action="?action=update&controller=sinh_vien" method="post">
    <input type="hidden" name='ma' value="<?php echo $each->getMa()?>"> 
    <br>
    Tên
    <input type="text" name='ten' value="<?php echo $each->getTen()?>">
    <br>
    Lớp 
    <select name="ma_lop">
        <?php foreach ($lops as $lop): ?>
            <option value="<?php echo $lop->getMa();?>"
                <?php if ($each->getMa_lop() === $lop->getMa()) echo "selected"; ?>
            >
                <?php echo $lop->getTen();?>
            </option>
        <?php endforeach ; ?>
    </select>
    <button>Sửa sinh viên</button>
</form>