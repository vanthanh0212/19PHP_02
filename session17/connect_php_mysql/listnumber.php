<?php
require_once'connect.php';
$id = $_GET['id'];
$sql = "SELECT ROW_NUMBER() OVER (ORDER BY id) AS No, id, title, description, avatar, created FROM news";
	mysqli_query($connect, $sql);
	// Chuyen trang
	header("Location: list_new.php");
?>