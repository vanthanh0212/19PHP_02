<!-- 1. Khai báo một đối tượng User gồm các thuộc tính:
Tên, email, password, phone, address
Các phương thức:
Add, Edit, Register, Login, View, List
2. Khai báo một đối tượng Customer gồm các thuộc tính
như của User và thêm địa chỉ giao hàng, mã khách hàng
Kế thừa các phương thức của users trừ Add user, list user
Thêm các phương thức như thanh toán, lịch sử mua hàng
Gọi các phương thức Register, thanh toán để ví dụ -->
<?php
	class User {
		// các thuộc tính
		public $username;
		public $useremail;
		public $userpassword;
		public $userphone;
		public $useraddress;
		// các phương thức
		public function addUser (){

		}
		public function editUser (){

		}
		public function registerUser(){
			echo "cahfo";
		}
		public function loginUser (){

		}
		public function viewUser () {

		}
		public function listUser (){

		}
	}
?>