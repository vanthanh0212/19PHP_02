 <h2 class="text-center">Edit Products</h2>
 <div class="container-fluid">
 	<section class="content">
 		<div class="row">
 			<div class="col-md-12">

 				<div class="box">
 					<div class="box-header with-border">
 						<h3 class="box-title">Quick Example</h3>
 					</div>
 					<form action="admin.php?controller=products&action=edit_products&id=<?php echo $id?>" method="POST" enctype="multipart/form-data">

 						<div class="box-body">

 							<div class="form-group">
 								<label for="exampleInputEmail1">Title</label>
 								<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Title" name="title" value="<?php echo $oldProducts['title']; ?>">
 							</div>

 							<div class="form-group">
 								<label for="exampleInputPassword1">Description</label>
 								<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description" name="description" value="<?php echo $oldProducts['description']; ?>">
 							</div>

 							<div class="form-group">
 								<label for="exampleInputFile">Image</label>
 								<input type="file" id="exampleInputFile" name="image">
 								<img src="uploads/products/<?php echo $oldProducts['image'];?>" style="width: 100px;" alt="">
 							</div>

 							<div class="form-group">
 								<label for="exampleInputPassword1">Price</label>
 								<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Price" name="price" value="<?php echo $oldProducts['price']; ?>">
 							</div>

 						</div>

 						<div class="box-footer">
 							<div class="row">
 								<div class="col-sm-6">
 									<button type="submit" class="btn btn-primary btn-block " name="edit_products">Submit</button>
 								</div>
 								<div class="col-sm-6">
 									<a class="btn btn-info btn-block" href="admin.php?controller=products&action=list_products">Cancle</a>
 								</div>
 							</div>
 						</div>
 					</form>
 				</div>
 			</div>
 		</div>
 	</section>
 </div>