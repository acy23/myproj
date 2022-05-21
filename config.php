<?php

$dbhost = "localhost";
$dbuser = "root";
$pass = "";
$db = "db";

$con = mysqli_connect($dbhost,$dbuser,$pass,$db);
if(mysqli_connect_errno()){
    echo "Failed to connect!";
    exit();
}
echo "connected to db";

?>