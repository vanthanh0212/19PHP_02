<?php 
	$server = 'localhost'; // $server = '127.0.0.1';
	$username = 'root';
	$password = ''; // $password = '';
	$database = '19php02';
	//ham kết nối
	$connect = mysqli_connect($server, $username, $password, $database);
  mysqli_set_charset($connect,"utf8");
	// Check connection
	// var_dump($connect);
	if (mysqli_connect_error())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  // $sql = "INSERT INTO news(title, description,image, created) VALUES ('viet nam','Vie','0','2019-07-06')";
  // $sql = "INSERT INTO users(name, gender, customer_type, start_date, end_date, address, start_number, end_number) VALUES ('test name', 'male', 1, '2019-03-01', '2019-06-01', 'DN', 21, 315)";
  // $sql1 = "INSERT INTO news(title, description,image, created) VALUES ('Campuchia','Cam','0','2019-07-05')";
  // $sql2 = "INSERT INTO news(title, description,image, created) VALUES ('Germany','Ger','0','2019-07-08')";
  // $sql3 = "INSERT INTO news(title, description,image, created) VALUES ('American','Ame','0','2019-07-04')";
  // $sql4 = "INSERT INTO news(title, description,image, created) VALUES ('Spain','Spa','0','2019-07-06')";



  // mysqli_query($connect, $sql);
  // mysqli_query($connect,$sql1);
  // mysqli_query($connect,$sql2);
  // mysqli_query($connect,$sql3);
  //  mysqli_query($connect,$sql4);

?>