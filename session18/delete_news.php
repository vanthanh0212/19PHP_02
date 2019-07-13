<?php
require_once'config/connect.php';
$id= $_GET['id'];
$sql = "DELETE FROM news1 WHERE id =$id";
mysqli_query($connect,$sql);
header('Location:list_news.php');
?>