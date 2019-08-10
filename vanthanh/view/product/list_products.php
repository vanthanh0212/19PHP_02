<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">List Products</h2>
			<div class="table-responsive">
				<table id="products" class="table table-bordered text-center">
					<thead class="bg-primary">
						<!--  <th><input type="checkbox" id="checkall" /></th> -->
						<th>No</th>
						<th>Id</th>
						<th>Title</th>
						<th>Description</th>
						<th>Image</th>
						<th>Price</th>
						<th>Action</th>
					</thead>
					<?php 
					$no = 1;
					while ($products = $listProducts->fetch_assoc()) 
					{
		# code...
						$id = $products['id'];
						?>
						<tr class="bg-success">
							<td><?php echo $no;?></td>
							<td><?php echo $products['id']?></td>
							<td><?php echo $products['title']?></td>
							<td><?php echo $products['description']?></td>
							<td><img src="uploads/products/<?php echo $products['image'];?>" style="width: 100px;"></td>
							<td><?php echo $products['price'];?></td>
							<td>
								<a href="admin.php?controller=products&action=edit_products&id=<?php echo $id;?>" class="btn btn-warning">Edit</a> | <a href="admin.php?controller=products&action=delete_products&id=<?php echo $id;?>" class="btn btn-danger">Delete</a>
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
<a href="admin.php?controller=products&action=add_products" class="btn btn-success btn-block">Add Products</a>