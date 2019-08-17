<?php 
include 'config/database.php';


	/**
	 * summary
	 */
	class FrontendModel extends ConnectDB
	{
		//start model register
		function register($username, $password, $role)
		{
			$checkUserExist = $this->checkUserExist($username);
			// kiểm tra username đã tồn tại hay chưa
			if ($checkUserExist-> num_rows ==0)  {
				$sql = "INSERT INTO users(username, password, role) VALUES('$username', '$password', '$role')";
				return mysqli_query($this->connect(), $sql);
			}
		} 
		//end model register

		// start model login
		function login($username, $password)
		{
			$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
			return mysqli_query($this->connect(),$sql);
		} 
		//end model login

		function checkUserExist($username)
		{
			$sql = "SELECT * FROM users WHERE username = '$username'";
			return mysqli_query($this->connect(),$sql);
		}
		function getListProducts()
		{
			$sql = "SELECT * FROM products";
			return mysqli_query($this->connect(),$sql);
		}
		function getProductsById($id)
		{
			$sql = "SELECT * FROM products WHERE id = '$id'";
			return mysqli_query($this->connect(),$sql);
		}

		// function getListComment()
		// {
		// 	$sql = "SELECT * FROM comment";
		// 	return mysqli_query($this->connect(),$sql);
		// }
		function getUserId($username)
		{
			$sql = "SELECT id FROM users WHERE username = '$username'";
			return mysqli_query($this->connect(),$sql);
		}
		function addComment( $userId,$productId, $content)
		{
			date_default_timezone_set('Asia/Ho_Chi_Minh');
			$created = date('Y-m-d h:i:s');
			$status = 1;
			$sql = "INSERT INTO comment (userId,productId,content, created, status)VALUES ( $userId, $productId, '$content' , '$created' , '$status')";
			// var_dump($sql);
			// exit();
			return mysqli_query($this->connect(),$sql);
		}

		function getListComment($productId)
		{
			$sql = "SELECT * FROM comment
			INNER JOIN users ON comment.userId = users.id
			WHERE productId = $productId AND status = 1";
			return mysqli_query($this->connect(),$sql);
		}
		 
	}
?>
