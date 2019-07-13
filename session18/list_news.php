<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		img {
			width: 100px;
		}
	</style>
</head>
<body>
	<?php
	require_once 'config/connect.php';
	$sql = "SELECT * FROM news1";
	$listNews = mysqli_query ($connect, $sql);
	 ?>
	 <h1>List News</h1>
	 <table>
	 	<tr>
	 		<td>Title</td>
	 		<td>Description</td>
	 		<td>Image</td>
	 		<td>Created</td>
	 		<td>Updated</td>
	 		<td>Action</td>
	 	</tr>
	 <?php 
	 while ($news1 = $listNews->fetch_assoc()) {
	 	# code...
	 	$id = $news1['id'];
	 ?>
	<tr>
		<td><?php echo $news1['title'] ?></td>
		<td><?php echo $news1['description'] ?></td>
		<td><img src="loadimage/<?php echo $news1['image'] ?>" alt=""></td>
		<td><?php echo $news1['created'] ?></td>
		<td><?php echo $news1['updated'] ?></td>
		<td><a href="edit_news.php?id=<?php echo $id;?>">Edit</a> | <a href="delete_news.php?id=<?php echo $id;?>">Delete</a></td>
	</tr>
	<?php 
		}
	?>		
	</table>
	<a href="add_news.php">Add_news</a>
</body>
</html>