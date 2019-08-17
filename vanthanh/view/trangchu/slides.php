<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	<!-- <link rel="stylesheet" href="webroot/css/bootstrap.min.css"> -->
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css">

<script src="webroot/js/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!-- <link rel="stylesheet" href="webroot/css/font-awesome.min.css"> -->

	<style>
	.logout {
		line-height: 50px;
		color: white;
	}
	</style>
	
</head>
<body>
	<div id="slides">
	<div class="container-fluid">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="webroot/img/background1.jpg" alt="...">
					<div class="carousel-caption">
						...
					</div>
				</div>
				<div class="item">
					<img src="webroot/img/background2.jpg" alt="...">
					<div class="carousel-caption">
						<h2>WELCOME TO FLOWERON</h2>
					</div>
				</div>
				...
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>


<hr class="mt-2 mb-2">


<div class="sanpham">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="card text-center">
					<img class="card-img-top" src="webroot/img/user1-128x128.jpg" alt="Card image cap">
					<div class="card-body">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card text-center">
					<img class="card-img-top" src="webroot/img/user1-128x128.jpg" alt="Card image cap">
					<div class="card-body">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card text-center">
					<img class="card-img-top" src="webroot/img/user1-128x128.jpg" alt="Card image cap">
					<div class="card-body">
						<h4 class="card-title">Card title</h4>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="filter">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-6">
					<ul class="nav navbar-nav ml-auto">
						<li class="active"><a href="">All</a></li>
						<li><a href="#">Popular</a></li>
						<li><a href="">Winter</a></li>
						<li><a href="">Various</a></li>
						<li><a href="#">Exotic</a></li>
						<li><a href="#">Greens</a></li>
						<li><a href="#">Cactuses</a></li>
					</ul>
			</div>
		</div>
	</div>
</div>
<?php 
	include 'view/trangchu/footer.php';
 ?>
			<!-- <script src="webroot/js/bootstrap.min.js"></script> -->
		</body>
		</html>