<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	img {
		width: 10rem;
	}
	table {
		border-collapse: collapse;
	}
	table, tr, th, td {
		border:3px solid green;
		margin: 0 auto;
		font-size: 20px;
		font-weight: bold;
		text-align: center;
	}
	th {
		background: lightblue;
	}
	td:nth-child(1) {
		background: red;
	}
	a {
		text-decoration: none;
	}
	td.footer1 {
		background: yellow;
	}
	td:nth-child(2) {
		background: #e51ea84d;
	}
</style>
</head>
<body>
	<?php 
	require_once'config/connect.php';
	//lấy id của sản phẩm
	$id = $_GET['id'];
	$sql = "SELECT * FROM products1 WHERE id =$id";
	$listProducts = mysqli_query($connect, $sql);
	// hiển thi sản phẩm
	$detailProducts = $listProducts ->fetch_assoc();
	//end
	?>
	<h1 style="text-align: center;">Chi tiết sản phẩm</h1>
	<table>
		<tr>
			<th>Danh mục</th>
			<th>Thông tin</th>
		</tr>
		<tr>
			<td>ID</td>
			<td><?php echo $detailProducts['id'] ?></td>
		</tr>
		<tr>
			<td>CATEGORY</td>
			<td><?php echo $detailProducts['category'] ?></td>
		</tr>
		<tr>
			<td>TITLE</td>
			<td><?php echo $detailProducts['title'] ?></td>
		</tr>
		<tr>
			<td>DESCRIPTION</td>
			<td><?php echo $detailProducts['description'] ?></td>
		</tr>
		<tr>
			<td>IMAGE</td>
			<td><img src="loading/<?php echo $detailProducts['image']?>" alt=""></td>
		</tr>
		<tr>
			<td>PRICE</td>
			<td><?php echo $detailProducts['price'] ?></td>
		</tr>
		<tr>
			<td>CREATED</td>
			<td><?php echo $detailProducts['created'] ?></td>
		</tr>
		<tr>
			<td>UPDATED</td>
			<td><?php echo $detailProducts['updated'] ?></td>
		</tr>
		<tr>
			<td colspan="2" class="footer1"><a href="list_products1.php">Quay lại</a></td>
		</tr>
	</table>
</div>
</body>
</html>