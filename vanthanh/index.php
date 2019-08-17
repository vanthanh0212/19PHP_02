<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="webroot/css/bootstrap.min.css">
	<link rel="stylesheet" href="webroot/css/font-awesome.min.css">
	<link rel="stylesheet" href="webroot/css/style_frontend.css">
	<style>
	.logout {
		font-size: 11px;
	}
</style>
	
</head>
<body>
<div id="header-top">
	<div class="container-fluid">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header ">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					</button>
					<a class="navbar-brand" href=""><img src="webroot/img/logo.png" alt=""></a>
				</div>
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav ml-auto">
						<li class="active"><a href="index.php?controller=front&action=home">Home</a></li>
						<li><a href="#">Introduces</a></li>
						<li><a href="index.php?controller=news&action=list_news">News</a></li>
						<li><a href="index.php?controller=products&action=list_products">Products</a></li>
						<li><a href="#">Contacts</a></li>
					</ul>
<!-- 					<form class=" nav navbar-form" role="search">
						<div class="form-group ">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn">Submit</button>
					</form> -->
					<ul class="nav navbar-nav ml-auto">
						<?php if (isset($_SESSION['login']['username'])) {?>
							<li class="logout">Hi, <?php echo $_SESSION['login']['username']; ?></li>
							<li><a href="index.php?controller=users&action=logout">Logout</a></li>
							<li><a href="admin.php">Admin</a></li>
						<?php }else{ ?>
							<li><a href="index.php?controller=users&action=login" >Login</a></li>
							<li><a href="index.php?controller=users&action=register">Register</a></li>
						<?php } ?>
					</ul>

				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
	</div>
</div>
			<?php 
			include 'controller/frontend_controller.php';
			$front = new FrontendController();
			$front->handleRequest();
			?>
			<script src="webroot/js/bootstrap.min.js"></script>

<script src="webroot/js/jquery.min.js"></script>
		</body>
		</html>