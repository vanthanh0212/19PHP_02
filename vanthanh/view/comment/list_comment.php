<div class="container">
	<div class="row">
		<div class="col-md-11">
			<h2 class="text-center">List Comment</h2>
			<div class="table-responsive">
				<table id="products" class="table table-bordered text-center ">
					<thead class="bg-primary">
						<!--  <th><input type="checkbox" id="checkall" /></th> -->
						<th>No</th>
						<th>Product</th>
						<th>Content</th>
						<th>Created</th>
						<th>Status</th>
						<th>Action</th>
					</thead>
					<?php 
					$no = 1;
					while ($comment = $listComment->fetch_assoc()) 
					{
		# code...
						$id = $comment['id'];
						?>
						<tr class="bg-success">
							<td><?php echo $no;?></td>
							<td><?php echo $comment['title']?></td>
							<td><?php echo $comment['content']?></td>
							<td><?php echo $comment['created']?></td>
							<td><?php echo $comment['status']?></td>
							<td>
								<?php if ($comment['status']==1) {?>
									<a href="admin.php?controller=comment&action=approve&id=<?php echo $id?>">Đã hiện</a>
									<?php }else { ?>
										<a href="admin.php?controller=comment&action=not_approve&id=<?php echo $id?>">Không cho hiện</a>
										<?php } ?>
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