<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">List News</h2>
			<div class="table-responsive">
				<table id="products" class="table table-bordered text-center ">
					<thead class="bg-primary">
						<!--  <th><input type="checkbox" id="checkall" /></th> -->
						<th>No</th>
						<th>Id</th>
						<th>Title</th>
						<th>Description</th>
						<th>Image</th>
						<th>Action</th>
					</thead>
					<?php 
					$no = 1;
					while ($news = $listNews->fetch_assoc()) 
					{
		# code...
						$id = $news['id'];
						?>
						<tr class="bg-success">
							<td><?php echo $no;?></td>
							<td><?php echo $news['id']?></td>
							<td><?php echo $news['title']?></td>
							<td><?php echo $news['description']?></td>
							<td><img src="uploads/news/<?php echo $news['image'];?>" style="width: 100px;"></td>
							<td>
								<a href="admin.php?controller=news&action=edit_news&id=<?php echo $id;?>" class="btn btn-warning">Edit</a> | <a href="admin.php?controller=news&action=delete_news&id=<?php echo $id;?>" class="btn btn-danger">Delete</a>
							</td>
						</tr>
						<?php 
						$no++;
					}

					?>

				</table>
			</div>
		</div>
	</div>
</div>
<a href="admin.php?controller=news&action=add_news" class="btn btn-success btn-block">Add News</a>