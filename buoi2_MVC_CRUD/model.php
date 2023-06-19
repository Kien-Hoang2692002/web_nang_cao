<?php

$connect = mysqli_connect('localhost', 'root', 'admin', 'j2school2');
mysqli_set_charset($connect, 'utf8');

switch ($action) {
    case '':
        $sql = "select * from sinh_vien ";
        $result = mysqli_query($connect,$sql);
        break;
    case 'store':
        $sql = "insert into sinh_vien (ten) 
                values ('$ten')";
        mysqli_query($connect,$sql);
        break;
    case 'edit':
        $sql = "select * from sinh_vien 
        where ma = '$ma'";
        $result = mysqli_query($connect,$sql);
        $each = mysqli_fetch_array($result);
        break;
    case 'update':
        $sql = "update sinh_vien 
        set ten = '$ten' 
        where ma = '$ma'";
        mysqli_query($connect,$sql);
        break;
    case 'delete':
        $sql = "DELETE FROM sinh_vien 
       WHERE ma = '$ma'";
        mysqli_query($connect,$sql);
        header('location:index.php');
        break;
    default:
        echo 1;
}
mysqli_close($connect);
