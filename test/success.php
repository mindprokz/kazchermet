<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php
	function connect_db(){
		$mysqli_infunc = new mysqli('srv-db-plesk06.ps.kz:3306','kz123_test1','Admin123','kz123161_test11');
		return $mysqli_infunc;
	};
	function showPeople(){
		$mysqli = connect_db();
		echo $mysqli->connect_error;
		$result = $mysqli->query('SELECT * FROM test1');
		$rows = '';
		while($rows = $result->fetch_assoc()){
			echo "<p>Имя:".$rows[name]."</p>";
		};
	};
	$check = 'false';
	function check_people(){
		$mysqli = connect_db();
		$result = $mysqli->query('SELECT * FROM test1');
		$rows = '';
		while($rows = $result->fetch_assoc()){
			if($rows[numbers] == $_POST['numbers']){
				return true;
			}else{
				return false;
			}
		};
	};
	$check = check_people();
	function create_people($name,$email,$number,$country,$city,$timing,$check,$one,$two,$three,$four,$five,$six,$seven,$eight,$nine,$ten){
		$mysqli = connect_db();
		echo $mysqli->connect_error;
		$mysqli->query("INSERT INTO test1 
						(name,email,numbers,country,city,time,check_us,one,two,three,four,five,six,seven,eight,nine,ten)
						VALUES 
						('$name','$email','$number','$country','$city','$timing','$check','$one','$two','$three','$four','$five','$six','$seven','$eight','$nine','$ten')
					");
	};
	if(!$_POST['name']){
		echo "404";
	};
	if ($_POST['name']){
		echo "тут1";
		if ( $check == false ){
			$name_user = $_POST['name'];
			$email_user = $_POST['email'];
			$numbers_user = $_POST['numbers'];
			$check_user = $_POST['check'];
			$country_user = $_POST['country'];
			$city_user = $_POST['city'];
			$timing_user = $_POST['time'];
			$one_q = $_POST['one'];
			$two_q = $_POST['two'];
			$three_q = $_POST['three'];
			$four_q = $_POST['four'];
			$five_q = $_POST['five'];
			$six_q = $_POST['six'];
			$seven_q = $_POST['seven'];
			$eight_q = $_POST['eight'];
			$nine_q = $_POST['nine'];
			$ten_q = $_POST['ten'];
			echo "Успех1 <br>";
			create_people($name_user,$email_user,$numbers_user,$country_user,$city_user,$timing_user,$check_user,$one_q,$two_q,$three_q,$four_q,$five_q,$six_q,$seven_q,$eight_q,$nine_q,$ten_q);
			echo "Успех <br>";
		}else{
			echo "<h3>Данные занесены!</h3>";
		};
	};
?>	
</body>
</html>