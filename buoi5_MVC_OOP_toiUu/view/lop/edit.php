
<form action="?action=update" method="post">
    <input type="hidden" name='ma' value="<?php echo $each->getMa()?>"> 
    Họ 
    <input type="text" name='ho' value="<?php echo $each->getHo()?>">
    <br>
    Tên
    <input type="text" name='ten' value="<?php echo $each->getTen()?>">
    <br>
    <button>Sửa</button>
</form>