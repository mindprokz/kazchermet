<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="../img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="../72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="../114x114" href="img/favicon/apple-touch-icon-114x114.png">
	<link rel="stylesheet" href="../css/style.min.css">
	<link rel="shortcut icon" href="http://kazchermet.com/favicon.ico" type="image/x-icon">
</head>
<body class="test_page">
	<header><img src="../img/logo.png" alt="logotype_test"></header>
<!-- <div class="black_bg"></div> -->
<?php
	function connect_db(){
		$mysqli_infunc = new mysqli('localhost','kipscrap_8','000001','kipscrap_8');
		return $mysqli_infunc;
	};
	function showPeople(){
		$mysqli = connect_db();
		echo $mysqli->connect_error;
		$result = $mysqli->query('SELECT * FROM jobs');
		$rows = '';
		while($rows = $result->fetch_assoc()){
			echo "<p>Имя:".$rows[name]."</p>";
		};
	};
	$check = 'false';
	function check_people(){
		$mysqli = connect_db();
		$result = $mysqli->query('SELECT * FROM jobs');
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
	function create_people($name,$email,$number,$country,$city,$timing,$check,$one,$two,$three,$four,$five,$six,$seven,$eight,$nine,$ten,$ques,$time){
		$mysqli = connect_db();
		echo $mysqli->connect_error;
		$mysqli->query("INSERT INTO jobs 
						(name,email,numbers,country,city,time,check_us,one,two,three,four,five,six,seven,eight,nine,ten,ques_ans,date_reg)
						VALUES 
						('$name','$email','$number','$country','$city','$timing','$check','$one','$two','$three','$four','$five','$six','$seven','$eight','$nine','$ten','$ques','$time')
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
				$ques_ans = $_POST['ques_ans'];
				$time_data = $_POST['date_time'];
				create_people($name_user,$email_user,$numbers_user,$country_user,$city_user,$timing_user,$check_user,$one_q,$two_q,$three_q,$four_q,$five_q,$six_q,$seven_q,$eight_q,$nine_q,$ten_q,$ques_ans,$time_data);
			if ($check_user == 'Прошел'){
				echo '
					<div class="content_noready_test clear">
						<h3 id="text_header">Поздравляем, вы прошли тестирование!</h3>
						<iframe id="video_ready" height="400" src="https://www.youtube.com/embed/tkvp1PXk6yM" frameborder="0" allowfullscreen></iframe>
						<div class="text_content">
							<p><span class="bold">Просим вас связаться по телефону </span> + 7 (705) 755-44-44 </p>
                            <p>Сохраните данный номер телефона, так как покинув страницу, вернуться на нее возможности не будет</p>
                            <p>Подробнее ознакомиться с деятельностью компании вы можете на сайте  <a href="http://kazchermet.com">http://kazchermet.com</a></p>
						</div>
					</div>	
				';
			}else{
				echo '
					<div class="content_noready_test clear">
						<header id="headest" class="bold">Уважаемый респондент!</header>
						<p>Благодарим вас за прохождения теста. К сожалению, тест не был пройден. В 
							благодарность за потраченное время предлагаем вам несколько полезных книг по 
							управленческим навыкам. <a href="https://www.dropbox.com/sh/0lly9qi03qj9kul/AAAZc-QAuSHXqX_o32xNm89va?dl=0"> Ссылка на книги </a>
                            <p>Подробнее ознакомиться с деятельностью компании вы можете на сайте  <a id="main_href" href="http://kazchermet.com">http://kazchermet.com</a></p>
						</p>
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