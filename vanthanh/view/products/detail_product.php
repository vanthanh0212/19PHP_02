<div class="container">
	<div class="row">
		<div class="col-sm-3 ">
			<div class="card text-center">
				<img class="card-img-top img-responsive" src="uploads/products/<?php echo $detailProducts['image'];?>"  alt="Card image cap">
				<div class="card-body">
					<h4 class="card-title"><?php echo $detailProducts['title'] ?></h4>
					<p class="card-text"><?php echo $detailProducts['price'] ?></p>
					<p class="sl">Số lượng:
					<input type="number" name="soluong" value="1" min="1">
					</p>
					<button class="btn btn-primary" onclick="addCart(<?php echo $detailProducts['title']?>">Buy now</button>
					<!-- <a href="index.php?controller=products&action=buy_products&id=<?php echo $id;?>" class="btn btn-primary">Buy Now</a> -->
				</div>
			</div>
		</div>
	</div>
</div>
			<script>
				
				function addCart($title) {
					// body...
					alert(title);
				}
			</script>