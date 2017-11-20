<?php 
	session_start();
	unset($_SESSION['signed-in']);
	$_SESSION = array();
	header("Location: index.php");
?>
