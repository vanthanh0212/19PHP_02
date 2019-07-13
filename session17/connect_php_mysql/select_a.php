<?php 
	//
	// require_once 'test_include.php';
	// require_once 'test_include.php';
	// require_once 'test_include.php';

	// include, include_once, require, require_once
	require_once 'connect.php';
	$sql = "SELECT `id`, `title`, `description`, `avatar`, `created` FROM `news` WHERE `title` LIKE '%a%' AND `created` = '2019-07-06'";
	$listNew = mysqli_query($connect, $sql);
	?>
	<table>
		<tr>
			<td>Title</td>
			<td>Description</td>
			<td>Avatar</td>
			<td>Created</td>
			<td>Action</td>
		</tr>
	
<?php
	while ($new = $listNew->fetch_assoc()) {
		$id = $new['id'];
?>
	<tr>
		<td><?php echo $new['title']?></td>
		<td><?php echo $new['description']?></td>
		<td><img src="loadimage/<?php echo $new['avatar']?>" alt="" width ="100"></td>
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
<a href="select_a.php">Select_a</a>
<a href="list_new.php">Come_Back_List</a>