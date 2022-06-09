<?php
require "Config.php";
$username = $_POST["username"];
$password = $_POST["password"];

$query = "INSERT INTO account_item_u (username, password)
        VALUES ('$username','$password')";

if(mysqli_query($conn, $query)){
    header("Location: Login_Page.php");
}else{
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}