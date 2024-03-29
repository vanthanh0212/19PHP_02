<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form</title>
	<style type="text/css">
		.error {
			color: red;
		}
	</style>
</head>
<body>
	<?php 
	require_once 'connect.php';
	$title = $description = $created= '';
	$errTitle = $errDescription = $errCreated = '';
	$checkSubmit = true;
	if (isset($_POST['title'])){
		$title = $_POST['title'];
		$description = $_POST['description'];
		$created = $_POST['created'];
		$avatar = "default.png";
		if ($title == '') {
			$errTitle = 'Please input your title';
			$checkSubmit = false;
		}
		if ($description == '') {
			$errDescription = 'Please input your description';
			$checkSubmit = false;
		}
		if ($created == '') {
			$errCreated = 'Please input your created';
			$checkSubmit = false;
		}
		// echo "<pre>" ra mảng thông tin ảnh
		if ($_FILES['avatar']['error'] == 0) { //==0 mới có file để up
			$avatar = $_FILES['avatar']['name']; // up lấy tên ảnh
			move_uploaded_file($_FILES['avatar']['tmp_name'], 'loadimage/'.$avatar);
		}
		if ($checkSubmit) {
				// tinh tien dien
				//echo Cal($end_number - $start_number, $customer_type);
			//chèn dữ liệu vào database

				$sql = "INSERT INTO news(title, description, avatar, created) VALUES ('$title', '$description', '$avatar', '$created')";

				mysqli_query($connect, $sql);
				// Chuyen trang
				header("Location: list_new.php");
			}
	}
	?>
	<h1>Form đăng ký</h1>
	<form action="#" method="POST" enctype="multipart/form-data">
		<p>Title
			<input type="text" name="title">
		</p>
		<p class="error"><?php echo $errTitle; ?></p>
		<p>Description
			<input type="text" name="description">
		</p>
		<p class="error"><?php echo $errDescription; ?></p>
		<p>Avatar
			<input type="file" name="avatar">
		</p>
		<p>Created
			<input type="date" name="created>
		</p>
		<p class="error"><?php echo $errCreated;?></p>
		<p><input type="submit" name="register"></p>
	</form>
</body>
</html>