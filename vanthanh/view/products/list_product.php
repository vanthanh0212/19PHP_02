


 
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
	<link rel="stylesheet" href="webroot/css/font-awesome.min.css">
	<link rel="stylesheet" href="webroot/css/style.css">
	<link rel="stylesheet" href="webroot/css/style_frontend.css">
	<style>

	</style>
</head>
<body>


	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="danhmucsanpham">
					<h3 class="text-xl-center">Danh mục sản phẩm</h3>
					<ul class="list-group">
						<a href=""><li class="list-group-item">Cras justo odio</li></a>
						<a href=""><li class="list-group-item">Cras justo odio</li></a>
						<a href=""><li class="list-group-item">Cras justo odio</li></a>
					</ul>
				</div>
			</div>
	
<!-- 	<div class="product">				
<div class="container"> -->
		<div class="col-sm-9">
					<?php 
					$no = 1;
					while ($products = $listProducts->fetch_assoc()) 
					{
		# code...
						$id = $products['id'];
						?>
								
					
							<div class="col-sm-4 col-xs-6">
								<div class="card text-center sanpham">
									<a href=""><img class="card-img-top img-responsive anhdemo" src="uploads/products/<?php echo $products['image'];?>"  alt="Card image cap"></a>
									<div class="xam"></div>
									<div class="icon">
										
									</div>
									<div class="hinhvuong">
										<a href="index.php?controller=products&action=detail_products&id=<?php echo $id;?>">
											<i class="fa fa-low-vision"></i>
											<p>Chi tiết sản phẩm</p>
										</a>
									</div>

									<div class="card-body">
										<h4 class="card-title"><?php echo $products['title'] ?></h4>
										<p class="card-text"><?php echo $products['price'] ?></p>
									</div>
								</div>

							</div>
	
						<?php 
						$no++;
		
				}


					?>
</div>
				</div>

</div>
	</div>

			<!-- <script src="webroot/js/bootstrap.min.js"></script> -->
		</body>
		</html> 