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
	//Lấy thông tin cũ theo id
	$id = $_GET['id'];
	$sql = "SELECT * FROM news WHERE id = $id";
	$editNews = mysqli_query($connect,$sql);
	$oldNews = $editNews -> fetch_assoc();
	//end

	$title = $description = $created= '';
	$errTitle = $errDescription = $errCreated = '';
	$checkSubmit = true;
	if (isset($_POST['register'])){
		$title = $_POST['title'];
		$description = $_POST['description'];
		$created = $_POST['created'];
		$avatar = $oldNews['avatar'];
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

				$sql = "UPDATE news SET title = '$title', description = '$description', avatar = '$avatar', created = '$created' WHERE id = $id";

				mysqli_query($connect, $sql);
				// Chuyen trang
				header("Location: list_new.php");
			}
	}
	?>
	<h1>Edit Form</h1>
	<form action="#" method="POST" enctype="multipart/form-data">
		<p>Title
			<input type="text" name="title" value="<?php echo $oldNews['title']; ?>">
		</p>
		<p class="error"><?php echo $errTitle; ?></p>
		<p>Description
			<input type="text" name="description" value="<?php echo $oldNews['description']; ?>">
		</p>
		<p class="error"><?php echo $errDescription; ?></p>
		<p>Avatar
			<input type="file" name="avatar">
			<img src="loadimage/<?php echo $oldNews['avatar']?>" alt="" width="100px">
		</p>
		<p>Created
			<input type="date" name="created" value="<?php echo $oldNews['created']; ?>">
		</p>
		<p class="error"><?php echo $errCreated; ?></p>
		<p><input type="submit" name="register"></p>
	</form>
</body>
</html>