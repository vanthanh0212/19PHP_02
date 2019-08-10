<?php 
include 'config/database.php';


	/**
	 * summary
	 */
	class FrontendModel extends ConnectDB
	{
		//start model register
		function register($username, $password)
		{
			$checkUserExist = $this->checkUserExist($username);
			// kiểm tra username đã tồn tại hay chưa
			if ($checkUserExist-> num_rows ==0)  {
				$sql = "INSERT INTO users(username, password) VALUES('$username', '$password')";
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
		

		 
	}
	?>
