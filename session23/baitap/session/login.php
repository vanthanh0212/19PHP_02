<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	session_start();
	$username = $password ='';
	$errorUsername = $errorPassword ='';
	$myusername = 'admin';
	$mypassword = '123456';
	$checksubmit = true;
	if (isset($_POST['submit'])) {
		$username  = $_POST['username'];
		$password = $_POST['password'];
	
	if ($username == '') {
		$errorUsername = 'Vui lòng nhập username';
		$checksubmit = false;
	}
	if ($password == '') {
		$errorPassword = 'Vui lòng nhập password';
		$checksubmit = false;
	}
	if ($checksubmit) {
		
		if ($myusername == $username &&  $mypassword == $password) {
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		header("Location:trangchu.php");
		}
	}
}
	?>


	<h2>Form đăng nhập</h2>
	<form action="" method="post">
		<p> username
			<input type="text" name="username">
		</p>
		<p class="error"><?php echo $errorUsername; ?></p>
		<p> password
			<input type="password" name="password">
		</p>
		<p class="error"><?php echo $errorPassword ?></p>
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>