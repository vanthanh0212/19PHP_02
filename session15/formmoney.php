<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form-Tiền điện</title>
	<style type="text/css">
	.error {
		color: red;
	}
	body {
		width: 50%;
		margin: 0 auto;
	}
</style>

</head>
<body>
	<?php
	$errUserName = $errGender = $errAdd =$errCustomer = $errNumberFirst = $errNumberLast = $errDayFirst = $errDayLast = '';
	$username = $gender = $add = $customer = $numberfirst = $numberlast = $dayfirst = $daylast = '';
	$checkSubmit = true;

	function CalNoTax ($number){
		if ($number <= 100){
			$money = $number*1500;
		}
		if ($number >100 && $number <=200) {
			$money = 100*1500 + ($number-100)*2000;
		}
		if ($number > 200) {
			$money = 100*1500 + ($number-100)*2000 + ($number - 200) *3500;
		}
		return $money;
	}


	function Cal($number, $customer){
		$money = 0;
		switch ($customer) {
			case '1':
			$money = CalNoTax($number);
			$money = $money + ($money*10/100);
				break;
			case '2':
			$money = CalToTax ($number);
			$money = $money + ($money*12/100);
				break;
			case '3':
			$money = CalToTax ($number);
			$money = $money + ($money*15/100);
				break;	
		}
		return number_format($money,0,",",".");;
	}
	if (isset($_POST['username'])) {
		$username = $_POST['username'];
		$add = $_POST['add'];
		$gender = isset($_POST['gender'])?$_POST['gender']:'';
		$customer = $_POST['customer'];
		$numberfirst = $_POST['numberfirst'];
		$numberlast = $_POST['numberlast'];
		$dayfirst = $_POST['dayfirst'];
		$daylast = $_POST['daylast'];
		if ($username == '') {
			$errUserName = 'Please input your username';
			$checkSubmit = false;
		}
		if ($add == '') {
			$errAdd = 'Please input your add';
			$checkSubmit = false;
		}
		if ($gender == '') {
			$errGender = 'Please input your gender';
			$checkSubmit = false;
		}
		if ($customer == '') {
			$errCustomer = 'Please input your customer';
			$checkSubmit = false;
		}
		if ($numberfirst == '') {
			$errNumberFirst = 'Please input your numberfirst';
			$checkSubmit = false;
		}
		if ($numberlast == '') {
			$errNumberLast = 'Please input your numberlast';
			$checkSubmit = false;
		}
		if ($dayfirst == '') {
			$errDayFirst = 'Please input your numberlast';
			$checkSubmit = false;
		}
		if ($daylast == '') {
			$errDayLast = 'Please input your numberlast';
			$checkSubmit = false;
		}
		if ($numberfirst > $numberlast) {
			$errNumberLast = $errNumberFirst = 'Please input check between numberfirst and numberlast';
			$checkSubmit = false;
		}
		if ($dayfirst > $daylast){
			$errDayLast = $errDayFirst = 'Please input check between dayfirst and daylast';
			$checkSubmit = false;
		}
		if($checkSubmit) {
			echo Cal ($numberlast - $numberfirst, $customer);
		}
	}
?>



	<h1>Tính tiền điện</h1>
	<form action="#" method="POST">
		<p>Name
			<input type="text" name="username" value="<?php echo $username;?> ">
		</p>
		<p class="error"><?php echo $errUserName; ?></p>	
		<p>Gender
			<input type="radio" name="gender"<?php echo ($gender == 'male')?'checked':''?> value="male"> Male
			<input type="radio" name="gender"<?php echo ($gender == 'female')?'checked':''?> value="female"> Female
		</p>
		<p class="error"><?php echo $errGender; ?></p>		
		<p>Add
			<input type="text" name="add" value="<?php echo $add; ?>">
		</p>
		<p class="error"><?php echo $errAdd; ?></p>	
		<p>Customer
			<select name="customer">
				<option value=''>Phân loại khách hàng</option>
				<option value='1' <?php echo ($customer == '1')?'selected':''?>> dân dụng</option>
				<option value='2' <?php echo ($customer == '2')?'selected':''?>> Kinh doanh</option>
				<option value='3' <?php echo ($customer == '3')?'selected':''?>> Sản xuất</option>
			</select>
		</p>
		<p class="error"><?php echo $errCustomer; ?></p>	
		<p>Số điện đầu kỳ
			<input type="text" name="numberfirst" value="<?php echo $numberfirst?>">
		</p>
		<p class="error"><?php echo $errNumberFirst; ?></p>	
		<p>Số điện cuối kỳ
			<input type="text" name="numberlast" value="<?php echo $numberlast ?>">
		</p>
		<p class="error"><?php echo $errNumberLast; ?></p>
		<p>Ngày đầu kỳ
			<input type="date" name="dayfirst" value="<?php echo $dayfirst ?>">
		</p>
		<p class="error"><?php echo $errDayFirst; ?></p>
		<p>Ngày cuối kỳ
			<input type="date" name="daylast" value="<?php echo $daylast ?>">
		</p>
		<p class="error"><?php echo $errDayLast; ?></p>
		<p><input type="submit" name="register"></p>
	</form>
</body>
</html>