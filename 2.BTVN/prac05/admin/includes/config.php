<?php
    // B1: Ket noi DB
    $host = 'localhost';
    $user = 'admin';
    $pass = 'abcabc';
    $db   = 'Ch01';
    $port = '3306';
    $conn =  mysqli_connect('localhost', 'root', '' , 'prac05');
    if(!$conn){
        die('Khong the ket noi vi ..');
        exit();
    }

?>