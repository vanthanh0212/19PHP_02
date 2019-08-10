<div class="container-fluid">
	<h2 class="text-center">Add News</h2>
	<section class="content">
		<div class="row">
			<div class="col-md-12">

				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Quick Example</h3>
					</div>
					<form action="admin.php?controller=news&action=add_news" method="POST" enctype="multipart/form-data">
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
						</div>

						<div class="box-footer">
							<div class="row">
								<div class="col-sm-6">
									<button type="submit" class="btn btn-primary btn-block " name="add_news">Submit</button>
								</div>
								<div class="col-sm-6">
									<a class="btn btn-info btn-block" href="admin.php?controller=news&action=list_news">Cancle</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>