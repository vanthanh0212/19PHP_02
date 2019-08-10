<?php 

include 'model/frontend_model.php';
include 'libs/function.php';
class FrontendController {
	function handleRequest()
	{	
		// khỏi tạo model dùng chung cho frontend
		$frontModel = new FrontendModel();
		//khỏi tạo libs dùng chung
		$libs = new LibCommon();
		$controller = isset($_GET['controller'])?$_GET['controller']:'front';
		$action = isset($_GET['action'])?$_GET['action']:'home';
		switch ($controller) {
			case 'front':
					// code...
			$this->handleFront($action,$frontModel,$libs);
			break;
			case 'news':
					// code...
			$this->handleNews($action,$frontModel,$libs);
			break;
			case 'products':
					// code...
			$this->handleProducts($action,$frontModel,$libs);
			break;
			case 'users':
					// code...
			$this->handleUsers($action,$frontModel,$libs);
			break;
		}
	}
	function handleFront($action,$frontModel,$libs)
	{
		switch ($action) {
			case 'home':
			include 'view/trangchu/slides.php';
				// code...
				break;
			
			default:
				// code...
				break;
		}
	}
	function handleNews($action,$frontModel,$libs)
	{
		
	}
	function handleProducts($action,$frontModel,$libs)
	{
		
	}
	function handleUsers($action,$frontModel,$libs)
	{
		switch ($action) {
			//start login controller
			case 'login':
				// code...
			if (isset($_POST['login'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];
				
				$checkLogin = $frontModel -> login($username, $password);
				if ($checkLogin -> num_rows) {
					$_SESSION['username']= $username;
					$libs-> redirectPage('index.php?controller=front&action=home');
				}
				// var_dump($username);
			}
			include 'view/users/login.php';
			break;

			//end login controller

			//start register controller

			case 'register':
			$errRegister = '';
				// code...
			if (isset($_POST['register'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];
				// $errorUsername = '';
				// $errorPassword = '';
				// if ($_FILES['avatar']['error'] == 0) {
				// 	$avatar = $_FILES['avatar']['name'];
				// 	move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/user/'.$avatar);
				// }
				if ($frontModel -> register($username, $password) == TRUE) {
					// cho phép đăng nhập khi đăng ký
					$_SESSION['username']= $username;
					// var_dump('expression'); exit();
					$libs->redirectPage('index.php?controller=front&action=home');
				}
				else {
					$errRegister = 'Username exist !';
				}
			}
			include 'view/users/register.php';
			break;

			// end controller register

			//start controller logout
			case 'logout':
				unset($_SESSION['username']);
				$libs->redirectPage('index.php?controller=front&action=home');
				break;
			//end controller logout
			default:
				// code...
			break;
		}
	}
}

?>