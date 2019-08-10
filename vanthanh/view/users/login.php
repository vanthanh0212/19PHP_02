<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<!-- <body>
	<h2>Login form</h2>
	<form action="index.php?controller=users&action=login" method="post">
		<p>Username
			<input type="text" name="username">
		</p>
		<p>Password
			<input type="password" name="password">
		</p>
		<p>
			<input type="submit" name="login" value="Login">
		</p>
	</form>
</body> -->
<body>
	<div class="container">
		<h2 class="text-center">Login form</h2>
		<form action="index.php?controller=users&action=login" method="post">
			<div class="row">
				<div class="form-row col-md-6 col-md-push-3">
					<div class="form-group col-md-12">
						<label for="inputEmail4">Username</label>
						<input type="text" class="form-control" id="inputEmail4" placeholder="Username" name="username">
					</div>
					<div class="form-group col-md-12">
						<label for="inputAddress">Password</label>
						<input type="password" class="form-control" id="inputAddress" placeholder="Password" name="password">
					</div>
				</div>
			</div>
			<div class="col-md-6 col-md-push-3 text-center">
				<button type="submit" class="btn btn-primary" value="Login" name="login">Sign in</button>
			</div>
		</form>
	</div>
</body>
</html>
