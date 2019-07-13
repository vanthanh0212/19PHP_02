<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.error {
			color: red;
		}
	</style>
</head>
<body>
	<?php
	require_once'config/connect.php';
	//lấy thông tin id cũ
	$id = $_GET['id'];
	$sql = "SELECT * FROM products1 WHERE id = $id";
	$editProducts = mysqli_query($connect, $sql);
	$oldProducts = $editProducts ->fetch_assoc();
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$updated = DATE('Y-m-d H:i:s');
	// end
    $category = $title = $description = $image = $price = '';
	$errCategory = $errTitle = $errDescription = $errImage = $errPrice = '';

	$checkSubmit = true;
	if (isset($_POST['category'])) {
		# code...
		$category = $_POST['category'];
		$title= $_POST['title'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$image = $oldProducts['image'];
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
			$sql = "UPDATE products1 SET category= '$category', title='$title', description = '$description', image = '$image', price='$price', updated = '$updated' WHERE id = $id";
			mysqli_query($connect,$sql);
				# code...
				header('Location:list_products1.php');
			}

	}
	?>
	<h1>Form sản phẩm</h1>
	<form action="#" method="POST" enctype="multipart/form-data">
		<p>
			category:
				<select name="category">
					<option value=" " >Please choose categoty</option>
					<option value="1" <?php echo ($oldProducts['category'] == '1')?'selected':''?>>High Quality</option>
					<option value="2" <?php echo ($oldProducts['category'] == '2')?'selected':''?>>Medium Quality</option>
					<option value="3" <?php echo ($oldProducts['category'] == '3')?'selected':''?>>Low Quality</option>
				</select>		
		</p>
		<p class="error"><?php echo $errCategory; ?></p>
		<p>
			title:
			<input type="text" name="title" value="<?php echo $oldProducts['title'];?>">
		</p>
		<p class="error"><?php echo $errTitle; ?></p>
		<p>
			description:
			<input type="text" name="description" value="<?php echo $oldProducts['description'];?>">
		</p>
		<p class="error"><?php echo $errDescription; ?></p>
		<p>
			image:
			<input type="file" name="image" value="">
			<img src="loading/<?php echo $oldProducts['image'];?>" alt="" width="100px">
		</p>
		<p class="error"></p>
		<p>
			price:
			<input type="number" name="price" value="<?php echo $oldProducts['price'];?>">
		</p>
		<p class="error"><?php echo $errPrice; ?></p>
		<p><input type="submit" name="register" value="add_products1"></p>
	</form>
</body>
</html>