<h2>Edit Products</h2>
<form action="index.php?action=edit_products&id=<?php echo $id?>" method="POST" enctype = "multipart/form-data"	>
	<p>Title
		<input type="text" name="title" value="<?php echo $oldProducts['title']?>">
	</p>
	<p>Description
		<input type="text" name="description" value="<?php echo $oldProducts['description']?>">
	</p>
	<p>Image
		<input type="file" name="image">
		<img src="uploads/products/<?php echo $oldProducts['image'];?>" alt="">
	</p>
	<p>Price
		<input type="number" name="price" value="<?php echo $oldProducts['price']?>">
	</p>
	<input type="submit" name="edit_products" value="Edit_products">
</form>