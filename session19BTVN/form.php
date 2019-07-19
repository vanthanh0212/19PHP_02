<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form sản phẩm</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- 	<style>
	body {
		margin: 0 auto;
	}
	h1 {
		text-align: center;
	}
	form {
		display: inline-block;
		border:1px solid green;
		padding: 10px 15px;
	}
</style> -->
<style type="text/css">
.error {
	color: red;
}
.narrow {
	margin-bottom: 10px;
}
</style>
</head>
<body>
	<?php 
	require_once'config/connect.php';
	$category = $title = $description = $image = $price = '';
	$errCategory = $errTitle = $errDescription = $errPrice = '';
	$checkSubmit = true;
	if (isset($_POST['category'])) {
		# code...
		$category = $_POST['category'];
		$title= $_POST['title'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$image = "default.png";
		if ($category =='') {
			$errCategory = 'Please input your category';
			$checkSubmit = false;
		}
		if ($title =='') {
			$errTitle = 'Please input your title';
			$checkSubmit = false;
		}
		if ($description == '') {
			$errDescription = 'Please input your description';
			$checkSubmit = false;
		}
		if ($price =='') {
			$errPrice = 'Please input your price';
			$checkSubmit =false;
		}

		if ($_FILES['image']['error']==0) {
			$image = $_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'], 'loading/'.$image);
		}
		
		// var_dump($image);
		if ($checkSubmit) {
			# code...
			$sql = "INSERT INTO products1 (category, title, description, image, price) VALUES ('$category','$title', '$description','$image','$price')";
			mysqli_query($connect,$sql);
				# code...
			header('Location:list_products1.php');
		}

	}
	?>
	<div class="container text-center">
		<h1 class="col-12 narrow text-center">Form sản phẩm</h1>
		<form action="#" method="POST" enctype="multipart/form-data">
			<div class="row narrow text-center">
				<div class="col-md-4 text-center">category:</div> 
				<div class="col-md-4">
					<select name="category">
						<option value="">Please choose categoty</option>
						<option value="High Quality" >High Quality</option>
						<option value="2" >Medium Quality</option>
						<option value="3" >Low Quality</option>
					</select>	
				</div>	
				<div class="col-md-4 error"><?php echo $errCategory; ?></div>
			</div>
			<div class="row narrow text-center">
				<div class="col-md-4 text-center">title:</div> 
				<div class="col-md-4"><input type="text" name="title"></div>
				<div class="col-md-4 error"><?php echo $errTitle; ?></div>
			</div>
			<div class="row narrow text-center">
				<div class="col-md-4 text-center">description:</div> 
				<div class="col-md-4"><input type="text" name="description"></div>
				<div class="col-md-4 error"><?php echo $errDescription; ?></div>
			</div>
			<div class="row narrow text-center">
				<div class="col-md-4 text-center">image:</div> 
				<div class="col-md-4"><input type="file" name="image"></div>
			</div>
			<div class="row narrow text-center">
				<div class="col-md-4 text-center">price:</div> 
				<div class="col-md-4"><input type="number" name="price"></div>
				<div class="col-md-4 error"><?php echo $errPrice; ?></div>
			</div>
			<p><input type="submit" name="register" value="add_products1"></p>
		</form>
	</div>
</body>
</html>