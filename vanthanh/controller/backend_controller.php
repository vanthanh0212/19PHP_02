<?php 
include 'model/backend_model.php';
include 'libs/function.php';

class BackendController 
{
	function handleRequest()
	{
			//khỏi tạo model dùng chung
		$backModel = new BackendModel();
		//khởi tạo libs dùng chung
		$libs = new LibCommon();
		$controller = isset($_GET['controller'])?$_GET['controller']:'back';
		$action = isset($_GET['action'])?$_GET['action']:'home';
		switch ($controller) {
			case 'back':
					// code...
			$this->handleBack($action,$backModel,$libs);
			break;
			case 'products':
			
					// code...
			$this->handleProducts($action,$backModel,$libs);
			break;
			case 'news':
					// code...
			
			$this->handleNews($action,$backModel,$libs);
			break;

			default:
					// code...
			break;
		}
	}
	function handleBack($action,$backModel,$libs)
	{
		echo 'chào';
	}

	function handleProducts($action,$backModel,$libs)
	{
		switch ($action)
		{
			case 'list_products':
			$listProducts = $backModel -> getListProducts();
			include 'view/product/list_products.php';
			break;
			case 'add_products':
					// code...
			if (isset($_POST['add_products'])) 
			{
				$title = $_POST['title'];
				$description = $_POST['description'];
				$price = $_POST['price'];
				$image = "default.png";
				if ($_FILES['image']['error']==0) 
				{
					$image = $_FILES['image']['name'];
					move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/products/'.$image);
				}
					// var_dump($title);exit();
				if ($backModel -> addProducts($title, $description, $image, $price)==TRUE)
				{
					$libs-> redirectPage('admin.php?controller=products&action=list_products');
				}

			}
			include 'view/product/add_products.php';
			break;


			case 'edit_products':
					// code...
			$id = $_GET['id'];

			$editProducts = $backModel -> getProductsById($id);
			
			$oldProducts = $editProducts -> fetch_assoc();

			if (isset($_POST['edit_products'])) 
			{
				$title = $_POST['title'];
				var_dump($title);
				$description = $_POST['description'];
				$price = $_POST['price'];
				$image = $oldProducts['image'];

				if ($_FILES['image']['error']==0) 
				{
					$image = $_FILES['image']['name'];
					move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/products/'.$image);
				}
					// var_dump($title);exit();
				if ($backModel -> editProducts($id, $title,$description,$image,$price)==TRUE){
					$libs-> redirectPage('admin.php?controller=products&action=list_products');
				}
			}
			include 'view/product/edit_products.php';
			break;



			case 'delete_products':
			$id = $_GET['id'];
			if ($backModel->deleteProducts($id)==TRUE) 
			{
				$libs-> redirectPage('admin.php?controller=products&action=list_products');
			}
			break;

			default:
					// code...
			break;
		}
	}

	function handleNews($action,$backModel,$libs)
	{
		switch ($action) 
		{
			case 'list_news':
				// code...
				$listNews = $backModel->getListNews();
				include 'view/new/list_news.php';
			break;

			case 'add_news':
				// code...
				if (isset($_POST['add_news'])) {
					$title = $_POST['title'];
					$description = $_POST['description'];
					$image = 'default.png';
					if ($_FILES['image']['error']==0) {
						$image = $_FILES['image']['name'];
						move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/news/'.$image);
					}
					if ($backModel -> addNews($title, $description, $image)==TRUE) 
					{
						$libs-> redirectPage('admin.php?controller=news&action=list_news');
					}
				}
				// var_dump('expression'); exit();
				include 'view/new/add_news.php';
			break;	
			case 'delete_news':
					// code...
				$id = $_GET['id'];
				if ($backModel->deleteNews($id)==TRUE) {
					$libs-> redirectPage(' admin.php?controller=news&action=list_news');
				}
					// var_dump('expression'); exit();
			break;

			case 'edit_news':
					// code...
				$id = $_GET['id'];
				$editNews = $backModel->getNewsById($id);
				$oldNews = $editNews -> fetch_assoc(); 

				if (isset($_POST['edit_news'])) {
					$title = $_POST['title'];
					$description = $_POST['description'];
					$image = $oldNews['image'];
					if ($_FILES['image']['error']==0) {
						$image = $_FILES['image']['name'];
						move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/news/'.$image);
					}
				if ($backModel->editNews($id, $title, $description, $image)==TRUE) {
					$libs-> redirectPage('admin.php?controller=news&action=list_news');
				}
			}
				include 'view/new/edit_news.php';
					// var_dump('expression'); exit();
			break;

			default:
				// code...
			break;
		}
	}
}
?>
