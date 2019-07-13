<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List Products</title>
	<style>
	body {
		width: 90%;
		margin: auto;
	}
		img {
			width: 100px;
		}
		table, tr, td, th {
			border: 1px solid black;
			text-align: center;
			font-size: 20px;
		}
		th {
			background: rgba(46, 52, 61, 0.5);
		}
		a{
			text-decoration: none;
			font-size: 20px;
			color: red;
		}
		button {
			border-radius: 15px;
			outline: none;
			background: lightblue;
		}
	</style>
</head>
<body>
	<?php 
	require_once'config/connect.php';
	$sql = "SELECT * FROM products1";
	$listProducts1 = mysqli_query($connect, $sql);
	?>
	<h1>List Products1</h1>
	<table>
		<tr>
			<th>Id</th>
			<th>Category</th>
			<th>Title</th>
			<th>Description</th>
			<th>Image</th>
			<th>Price</th>
			<th>Created</th>
			<th>Updated</th>
			<th>Action</th>
			<th>Detail Products</th>
		</tr>
		<?php 
	 while ($products1 = $listProducts1->fetch_assoc()) {
	 	# code...
	 	$id = $products1['id'];
	 ?>
		<tr>
			<td><?php echo $products1['id'] ?></td>
			<td><?php echo $products1['category'] ?></td>
			<td><?php echo $products1['title'] ?></td>
			<td><?php echo $products1['description'] ?></td>
			<td><img src="loading/<?php echo $products1['image'] ?>" alt=""></td>
			<td><?php echo $products1['price'] ?></td>
			<td><?php echo $products1['created'] ?></td>
			<td><?php echo $products1['updated'] ?></td>
			<td>
				<a href="edit_products1.php?id=<?php echo $id;?>">Edit</a>	| <a href="delete_products1.php?id=<?php echo $id?>">Delete</a>
			</td>
			<td><a href="detail_products.php?id=<?php echo $id;?>">Chi tiết</a></td>
		</tr>
		<tr>
		</tr>
		<?php
	}
		?>
	</table>
	<button><a href="form.php">Add_products1</a></button>

</body>
</html>