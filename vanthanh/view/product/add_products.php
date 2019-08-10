<div class="container-fluid">
	<h2 class="text-center">Add Products</h2>
	<section class="content">
		<div class="row">
			<div class="col-md-12">

				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Quick Example</h3>
					</div>
					<form action="admin.php?controller=products&action=add_products" method="POST" enctype="multipart/form-data">
						<div class="box-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Title</label>
								<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Title" name="title">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Description</label>
								<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Description" name="description">
							</div>
							<div class="form-group">
								<label for="exampleInputFile">Image</label>
								<input type="file" id="exampleInputFile" name="image">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Price</label>
								<input type="number" class="form-control" id="exampleInputPassword1" placeholder="Price" name="price">
							</div>
						</div>

						<div class="box-footer">
							<div class="row">
								<div class="col-sm-6">
									<button type="submit" class="btn btn-primary btn-block " name="add_products">Submit</button>
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