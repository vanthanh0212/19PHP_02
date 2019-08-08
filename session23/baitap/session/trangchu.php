<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tranh chủ</title>
</head>
<body>
	<?php 
		session_start();
		echo $_SESSION['username'];
	 ?>
	<h1>Trang chủ</h1>
	<a href="logout.php">Logout</a>
</body>
</html>