<?php
require "Config.php";
$username = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT * FROm account_item_u WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    header("Location: Mobile_page.php");
}else{
    echo "<center><h1>username atau password salah.</h1><button><strong>
    <a href='Login_Page.php'>Login</a></strong></button></center>";
}