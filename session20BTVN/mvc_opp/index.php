<?php 
include 'controller/controller.php';
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link rel="stylesheet" href="css/bootstrap.min.css">
 	<link rel="stylesheet" href="webroot/css/style.css">
 </head>
 <body>
<!--  	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
 		<a class="navbar-brand mr-4" href="#">Navbar</a>
 		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
 			<span class="navbar-toggler-icon"></span>
 		</button>

 		<div class="collapse navbar-collapse" id="navbarSupportedContent">
 			<ul class="navbar-nav mr-lg-auto">
 				<li class="nav-item active">
 					<a class="nav-link"  href="index.php">Home <span class="sr-only">(current)</span></a>
 				</li>
 				<li class="nav-item">
 					<a class="nav-link" href="index.php?action=news">News</a>
 				</li>
 				<li class="nav-item">
 					<a class="nav-link" href="index.php?action=products">products</a>
 				</li>
 				<li class="nav-item">
 					<a class="nav-link" href="index.php?action=user">user</a>
 				</li>
 			</ul>
 			<form class="form-inline my-2 my-lg-0">
 				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
 				<button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
 			</form>
 			<ul class="navbar-nav mr-right">
 				<li class="nav-item">
 					<a class="nav-link" href="index.php?action=login">Login</a>
 				</li>
 				<li class="nav-item">
 					<a class="nav-link" href="view/logout/logout.php">Logout</a>
 				</li>
 			</ul>
 		</div>
 	</nav> -->
 	<h1>Welcome to my Website</h1>
 	<a href="index.php">home</a>
 	<a href="index.php?action=news">News</a>
 	<a href="index.php?action=products">products</a>
 	<a href="index.php?action=user">user</a>
 	<a href='index.php?action=login'>login</a>;
 	<a href="index.php?action=logout">logout</a>


 	<script src="js/bootstrap.js"></script>
 </body>
 </html>

<?php 
	$controller = new Controller();
	$controller ->handleRequest();
 ?>