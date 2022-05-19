<?php
session_start();
if(isset($_SESSION['id']) or isset($_SESSION['username']))

{
	unset($_SESSION['id']);
	unset($_SESSION['username']);
}



header("Location:../welcome.php");
die;

?>