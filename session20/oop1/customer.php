<?php 
	include 'oop.php';
	class Customer extends User {
		public $delivery;
		public $codeCustomer;
		public function editUser (){

		}
		public function registerUser(){
			echo "string";
		}
		public function loginUser (){

		}
		public function viewUser () {

		}
		public function payUser (){

		}
		public function historyBuy (){

		}
	} 
	$customer = new Customer();
	echo "<br>";
	$customer ->registerUser();
	echo "<br>";
	$customer ->payUser();
?>