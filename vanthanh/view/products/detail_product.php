
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	<!-- <link rel="stylesheet" href="webroot/css/bootstrap.min.css"> -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="webroot/js/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="webroot/css/font-awesome.min.css">
	<link rel="stylesheet" href="webroot/css/style.css">
	<link rel="stylesheet" href="webroot/css/style_frontend.css">
</head>
<body>
<div class="container">
<div class="row">
	<div class="col-sm-3 ">
		<div class="card text-center">
			<img class="card-img-top img-responsive" src="uploads/products/<?php echo $detailProducts['image'];?>"  alt="Card image cap">
			<div class="card-body">
				<h4 class="card-title"><?php echo $detailProducts['title'] ?></h4>
				<p class="card-text"><?php echo $detailProducts['price'] ?></p>
				<a href="index.php?controller=products&action=buy_products" class="btn btn-primary">Buy</a>
			</div>
		</div>
	</div>
</div>
</div> 
<div class="container">
	<div class="row">
		<?php 
			if ($listComment->num_rows >0) {
				while ($comment = $listComment -> fetch_assoc()) {
				    $id = $comment['id'];
		 ?>
		<div class="col-md-12">
	  		<div class="card-header title"><?php echo $comment['username'] ?></div>
	  		<div class="card-body">
    			<p class="card-text"><?php echo $comment['content'] ?></p>
    			<h5 class="card-title"><?php echo $comment['created'] ?></h5>
	 		 </div>
	 		 <hr>
		</div>

		<?php } ?>
		<?php }else { ?>
			<div class="card-title">
				<p>No comment</p>
			</div>
			<?php } ?>
	</div>
	
	</div>
	


 <div class="container">
	<form  action="index.php?controller=comment&action=add_comment&productId=<?php echo $detailProducts['id']?>" method="post">
	  <div class="form-row">
	    	<textarea name="content" id="" cols="30" rows="10"></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary" name="add_comment">add_comment</button>
	</form>
</div>
</body>
</html>

