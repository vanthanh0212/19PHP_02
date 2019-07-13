<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add_news</title>
	<style type="text/css">
		img {
			width: 100px;
		}
	</style>
</head>
<body>
	<?php
	include 'config/connect.php';
	// lấy id cũ 
	$id = $_GET['id'];
	$sql = "SELECT * FROM news1 WHERE id = $id";
	$editNews = mysqli_query($connect, $sql);
	$oldNews = $editNews ->fetch_assoc();
	$updated = Date('Y-m-d h:i:s');
	//
	$title = $description = $image ='';
	$errTitle = $errDescription = $errImage ='';
	if (isset($_POST['edit_news'])) {
		$title = $_POST['title'];
		$description = $_POST['description'];
		$image = $oldNews['image'];
		// var_dump($title,$description,$image);
		if ($_FILES['image']['error']==0) {
			# code...
			$image = $_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'], 'loadimage/'.$image);
		}
	$sql = "UPDATE news1 SET title='$title', description ='$description', image = '$image', updated = '$updated' WHERE id =$id ";
	if (mysqli_query($connect,$sql)== true) {
		# code...
		header('Location: list_news.php');
	}
}
	?>
	<h1>Edit News</h1>
	<form action="#" method="POST" enctype="multipart/form-data">
		<p>
			Title:
			<input type="text" name="title" value="<?php echo $oldNews['title']?>">
		</p>
		<p class="error"></p>
		<p>
			Description
			<input type="text" name="description" value="<?php echo $oldNews['description']?>" >
		</p>
		<p class="error"></p>
		<p>
			Image:
			<input type="file" name="image" >
			<img src="loadimage/<?php echo $oldNews['image']?>" alt="">
		</p>
		<p class="error"></p>
		<p>
			<input type="submit" name="edit_news" value="edit_news">
		</p>
	</form>
</body>
</html>