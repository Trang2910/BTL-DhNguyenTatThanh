<?php 
	include'connect.php';
	session_start();
	session_destroy() or die(mysqli_error($conn));
	header('location:login.php');
?>
