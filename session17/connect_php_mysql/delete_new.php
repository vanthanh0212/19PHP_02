<?php 
	require_once 'connect.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM news WHERE id = $id";

	mysqli_query($connect, $sql);
	// Chuyen trang
	header("Location: list_new.php");
?>