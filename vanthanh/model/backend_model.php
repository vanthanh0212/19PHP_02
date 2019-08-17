<?php 
	include 'config/database.php';
	
	/**
	 * summary
	 */
	class BackendModel extends ConnectDB
	{
		// start model products
		function addProducts($title, $description, $image, $price)
		{
			$sql = "INSERT INTO products(title, description, image, price) VALUES ('$title', '$description', '$image', '$price')";
			return mysqli_query($this->connect(),$sql);
		}
		function getListProducts()
		{
			$sql = "SELECT * FROM products";
			return mysqli_query($this->connect(),$sql);
		}
		function deleteProducts($id)
		{
			$sql = "DELETE FROM products WHERE id =$id";
			return mysqli_query($this->connect(),$sql);
		}
		function getProductsById($id)
		{
			$sql = "SELECT * FROM products WHERE id = $id";
			return mysqli_query($this->connect(),$sql);
		}
		function editProducts($id, $title, $description, $image, $price) 
		{
			$sql = "UPDATE products SET title = '$title', description = '$description', image = '$image', price = '$price' WHERE id = $id";
			return mysqli_query($this->connect(),$sql);
		}

		// end model products


		// start model news
		function getListNews()
		{
			$sql = "SELECT * FROM news";
			return mysqli_query($this->connect(),$sql);
		}
		function addNews($title, $description,$image)
		{
			$sql = "INSERT INTO news (title, description, image) VALUES ('$title', '$description', '$image')";
			return mysqli_query($this->connect(),$sql);
		}
		function deleteNews($id)
		{
			$sql = "DELETE FROM news WHERE id=$id";
			return mysqli_query($this->connect(),$sql);
		}
		function getNewsById($id)
		{
			$sql = "SELECT * FROM news WHERE id = $id";
			return mysqli_query($this->connect(),$sql);
		}
		function editNews($id, $title, $description, $image)
		{
			$sql = "UPDATE news SET title = '$title', description = '$description', image='$image' WHERE id = $id";
			return mysqli_query($this->connect(),$sql);
		}

		//end model news

		//start model comment
		function getListComment()
		{
			$sql = "SELECT comment.id, comment.content, comment.created, comment.productId, comment.status, products.title, products.id as productId FROM comment INNER JOIN products ON products.id = comment.productId";
			return mysqli_query($this->connect(),$sql);
		}

		function approveComment($id)
		{
			$sql = "UPDATE comment SET status = 0 WHERE id =$id";
			return mysqli_query($this->connect(),$sql);
		}
			function notApproveComment($id)
		{
			$sql = "UPDATE comment SET status = 1 WHERE id =$id";
			return mysqli_query($this->connect(),$sql);
		}
	}
 ?>