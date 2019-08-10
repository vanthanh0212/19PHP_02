<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	<!-- <link rel="stylesheet" href="webroot/css/bootstrap.min.css"> -->
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="webroot/js/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
	<!-- <link rel="stylesheet" href="webroot/css/font-awesome.min.css"> -->

	<style>
	.logout {
		line-height: 50px;
		color: white;
	}
	</style>
	
</head>
<body>
<div class="menutop">
	<div class="container">
		<nav class="navbar navbar-default navbar-expand navbar-inverse" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header ">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">FrontEnd Website</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-left">
						<li class="active"><a href="index.php?controller=front&action=home">Home</a></li>
						<li><a href="#">Introduces</a></li>
						<li><a href="index.php?controller=news&action=list_news">News</a></li>
						<li><a href="index.php?controller=products&action=list_products">Products</a></li>
						<li><a href="#">Contacts</a></li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<?php if (isset($_SESSION['username'])) {?>
							<li class="logout">Hi, <?php echo $_SESSION['username']; ?></li>
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


	<!-- <h1>FrontEnd Website</h1>
	<nav id="nav">
		<ul>
			<li><a href="index.php?controller=front&action=home">Home</a></li>
			<li><a href="index.php?controller=news&action=list_news">News</a></li>
			<li><a href="index.php?controller=products&action=list_products">Products</a></li> -->

			

			<!-- </ul> -->
			<!-- </nav> -->
			<?php 
			include 'controller/frontend_controller.php';
			$front = new FrontendController();
			$front->handleRequest();
			?>
			<!-- <script src="webroot/js/bootstrap.min.js"></script> -->
		</body>
		</html>