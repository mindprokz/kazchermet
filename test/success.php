<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="../img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="../72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="../114x114" href="img/favicon/apple-touch-icon-114x114.png">
	<link rel="stylesheet" href="../sass/style.min.css">
</head>
<body class="test_page">
	<header><img src="../img/logo.png" alt="logotype_test"></header>
<!-- <div class="black_bg"></div> -->
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
		echo '
		<div class="content_noready_test clear">
			<img src="../img/anketa.png" alt="anketa">
			<h3>Заполните анкету</h3>
			<p>Чтобы пройти тест нужно заполнить анкету с данными, нажмите на кнопку ниже, что бы перейти к странице для заполнения данных.</p>
			<a class="cont" href="index.php">Заполнить анкету</a>
		</div>';
	};
	if ($_POST['name']){

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
				create_people($name_user,$email_user,$numbers_user,$country_user,$city_user,$timing_user,$check_user,$one_q,$two_q,$three_q,$four_q,$five_q,$six_q,$seven_q,$eight_q,$nine_q,$ten_q);
			if ($check_user == 'Прошел'){
				echo '
					<div class="content_noready_test clear">
						<img id="video_ready" src="../img/video_ready.jpg" alt="">
						<div class="text_content">
							<h3 id="text_header">Поздравляем вы прошли тестирование</h3>
							<p><span class="bold">Контакты для связи: </span> + 7 (702) 700-00-00,  example@mail.ru </p>
						</div>
					</div>	
				';
			}else{
				echo '
					<div class="content_noready_test clear">
						<header id="headest" class="bold">Уважаемый респондент!</header>
						<p>Благодарим вас за прохождения теста. К сожалению, тест не был пройден. <a href="#">Рекомендуем вам несколько полезных книг по управленческим навыкам</a></p>
					</div>
				';
			};
		}else{
			echo '
			<div class="content_noready_test2 clear">
				<img src="../img/anketa.png" alt="anketa">
				<h3>Данные занесены</h3>
				<p>Спасибо за участие, данные занесены в базу. Мы с вами свяжемся.</p>
				<a class="cont" href="index.php">Заполнить анкету</a>
			</div>';
		};
	};
?>	
</body>
</html>