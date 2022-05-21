<?php

session_start();
include("../config.php");
include("reachaccess.php");

if(isset($_SESSION['id']) or isset($_SESSION['username']))

{
	unset($_SESSION['id']);
	unset($_SESSION['username']);
	unset($_SESSION['name']);
	unset($_SESSION['surname']);
	unset($_SESSION['email']);
	unset($_SESSION['phone']);
	unset($_SESSION['image']);
}



header("Location:../welcome.php");
die;

?>