<?php
        //DB params
$host = "localhost";
$username = "root";
$password = "";
$db_name = "item_u";
$conn = mysqli_connect($host, $username, $password, $db_name);

if(!$conn){
    die("koneksi Gagal : " . mysqli_connect_error());
}else{
    echo "koneksi Berhasil";
}
?>