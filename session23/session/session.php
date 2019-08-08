<?php 
	session_start();
	$username = "demo"; 
	$_SESSION['login'] = $username;
	echo $_SESSION['login'];

 ?>