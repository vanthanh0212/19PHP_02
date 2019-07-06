<?php 
	//
	// require_once 'test_include.php';
	// require_once 'test_include.php';
	// require_once 'test_include.php';

	// include, include_once, require, require_once
	require_once 'connect.php';
	$sql = "SELECT * FROM news";
	$listNew = mysqli_query($connect, $sql);
	?>
	<table>
		<tr>
			<td>Title</td>
			<td>Description</td>
			<td>Avatar</td>
			<td>Creater</td>
			<td>Action</td>
		</tr>
	
<?php
	while ($new = $listNew->fetch_assoc()) {
		$id = $new['id'];
?>
	<tr>
		<td><?php echo $new['title']?></td>
		<td><?php echo $new['description']?></td>
		<td><?php echo $new['avatar']?></td>
		<td><?php echo $new['created']?></td>
		<td>
			<a href="#">Edit</a> | <a href="delete_new.php?id=<?php echo $id?>">Delete</a>
		</td>
	</tr>

<?php
	}
?>
</table>
<a href="form2.php">Add user</a>