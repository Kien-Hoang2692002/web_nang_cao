<?php

function connect(){
    $connect = mysqli_connect('localhost','root','admin','j2school2');
    mysqli_set_charset($connect,'utf8');

    return $connect;
}

