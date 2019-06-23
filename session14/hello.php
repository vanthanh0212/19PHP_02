<?php
  echo "<h1>HELLO PHP</h1>";
  echo "<br>";
  $userName = 'thanh';
  $passWord = '12121212';

  echo $userName;
  echo "<br>";
  echo $passWord;

  //in ra bảng cửu chương từ 2 đến 9;
  for ($i = 1; $i < 10; $i++){
  	echo "<br>";
  	echo "Bảng cửu chương" .$i;
  	echo "<br>";
  	for ($j = 1; $j <10; $j++){
  		echo " $i * $j =".($i*$j); // chuỗi in ra trong dấu kép
  		echo "<br>"; 
  	}

  }
?>