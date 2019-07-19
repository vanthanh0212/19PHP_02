<?php
	class User { //quản lí đối tượng người dùng
		//thuộc tính và phương thức
		//thuộc tính
		// public( ai dùng cũng dk), protected( chỉ con kế thừa cha), private(chỉ sữ dụng khi được khai báo)
		public $username = '19php02';
		public $password;
		//phương thức 
		function addUser($username, $password) {
			return "Add user $username and $password";
		}
		function editUser (){
			echo "Edit user";
		}
		function detailUser (){
			$a = 5 + 6;
			return $a;
		}
	}
?>