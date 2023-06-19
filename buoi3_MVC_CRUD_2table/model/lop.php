
<?php

require_once 'model/connect.php';
$connect = connect();

function lop_index() {
    $connect = connect();
    $sql = "select * from lop3";
    $result = mysqli_query($connect,$sql);
    mysqli_close($connect);
    
    return $result;
}
function lop_store($ten) {
    $connect = connect();
    $sql = "insert into lop3(ten)
            values('$ten')";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
    
}
function lop_edit($ma) {
    global $connect; 
    $sql = "select * from lop3 
                where ma = '$ma'";
    $result = mysqli_query($connect,$sql);
    $each = mysqli_fetch_array($result);
    mysqli_close($connect);
    
    return $each;
}
function lop_update($ma, $ten) {
    $connect = connect();
    $sql = "update lop3 
            set ten='$ten' 
            where ma = '$ma'";
        mysqli_query($connect,$sql);
    mysqli_close($connect);
    
}
function lop_delete($ma) {
    $connect = connect();
    $sql = "delete from lop3 
            where ma = '$ma'";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
    
}

// switch ($action){
//     case '':
//         $sql = "select * from lop3";
//         $result = mysqli_query($connect,$sql);
//         break;
//     case 'store':
//         $sql = "insert into lop3(ten)
//                 values('$ten')";
//         mysqli_query($connect,$sql);
//         break;
//     case 'edit':
//         $sql = "select * from lop3 
//                 where ma = '$ma'";
//         $result = mysqli_query($connect,$sql);
//         $each = mysqli_fetch_array($result);
//         break;
//     case 'update':
//         $sql = "update lop3 
//                 set ten='$ten' 
//                 where ma = '$ma'";
//         mysqli_query($connect,$sql);
//         break;
//     case 'delete':
//         $sql = "delete from lop3 
//                 where ma = '$ma'";
//         mysqli_query($connect,$sql);
//         break;
// }


