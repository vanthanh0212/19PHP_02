<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add_news</title>
</head>
<body>
	<?php
	include 'config/connect.php';
	$title = $description = $image ='';
	$errTitle = $errDescription = $errImage ='';
	if (isset($_POST['add_news'])) {
		$title = $_POST['title'];
		$description = $_POST['description'];
		$image = 'default.png';
		// var_dump($title,$description,$image);
		if ($_FILES['image']['error']==0) {
			# code...
			$image = $_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'], 'loadimage/'.$image);
		}
	$sql = "INSERT INTO news1(title,description,image) VALUES('$title','$description','$image')";
	if (mysqli_query($connect,$sql)== true) {
		# code...
		header('Location: list_news.php');
	}
}
	?>
	<h1>Form đăng ký</h1>
	<form action="#" method="POST" enctype="multipart/form-data">
		<p>
			Title:
			<input type="text" name="title" >
		</p>
		<p class="error"></p>
		<p>
			Description
			<input type="text" name="description" >
		</p>
		<p class="error"></p>
		<p>
			Image:
			<input type="file" name="image">
		</p>
		<p class="error"></p>
		<p>
			<input type="submit" name="add_news" value="add_news">
		</p>
	</form>
</body>
</html>