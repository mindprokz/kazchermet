<!-- 
	@ Сделать открытые вопросы 
	@ Вынести  js в отдельный файл
 -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript 
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->

	<link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="../img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="../72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="../114x114" href="img/favicon/apple-touch-icon-114x114.png">
	<link rel="stylesheet" href="../css/style.min.css">
	<link rel="shortcut icon" href="http://kazchermet.com/favicon.ico" type="image/x-icon">
</head>
<body class="test_page">
	<header><img src="../img/logo.png" alt="logotype_test"></header>
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
	function create_people($name, $email,$number,$check){
		$mysqli = connect_db();
		$mysqli->query("INSERT INTO jobs 
						(name, email, numbers,check_us)
						VALUES 
						('$name','$email', '$number','$check')
						");
	};

	$check = false;
	function check_people(){
		$mysqli = connect_db();
		$result = $mysqli->query('SELECT * FROM jobs');
		$rows = '';
		while($rows = $result->fetch_assoc()){
			if($rows[numbers] == $_POST['numbers']){
				return true;
			};
		};
	};
	$check = check_people();
?>
<?php if(!$_POST['name'] || !$_POST['email'] || !$_POST['country'] || !$_POST['city']):?>
	<div class="content_noready_test clear">
		<img src="../img/anketa.png" alt="anketa">
		<h3>Заполните анкету</h3>
		<p>Чтобы пройти тест нужно заполнить анкету с данными, нажмите на кнопку ниже, что бы перейти к странице для заполнения данных.</p>
		<a class="cont" href="index.php">Заполнить анкету</a>
	</div>
	<?php else:?>
	<? if($check): ?>
		<div class="content_noready_test2 clear">
			<img src="../img/anketa.png" alt="anketa">
			<h3>Вы проходили тест</h3>
			<p>Тестирование можно пройти только один раз, спасибо за участие.</p>
		</div>
	<? else: ?>
			<h3><?php echo $results_test;?></h3>
			<form name="my" action="success.php" method="POST">
				<input type="text" name="name" value="<? echo $_POST['name']?>" style="display:none;">
				<input type="text" name="email" value="<? echo $_POST['email']?>" style="display:none;">
				<input type="text" name="numbers" value="<? echo $_POST['numbers']?>" style="display:none;">
				<input type="text" name="country" value="<? echo $_POST['country']?>" style="display:none;">
				<input type="text" name="city" value="<? echo $_POST['city']?>" style="display:none;">
				<input type="text" name="time" value="0:00" style="display:none;">
				<input type="text" name="check" value="Не прошел" style="display:none;">
				<input type="text" name="ques_ans" value="0" style="display:none">
				<input type="text" name="date_time" value="" style="display:none">

				<input type="text" name="one" value="Не отвечен" style="display:none;">
				<input type="text" name="two" value="Не отвечен" style="display:none;">
				<input type="text" name="three" value="Не отвечен" style="display:none;">
				<input type="text" name="four" value="Не отвечен" style="display:none;">
				<input type="text" name="five" value="Не отвечен" style="display:none;">
				<input type="text" name="six" value="Не отвечен" style="display:none;">
				<input type="text" name="seven" value="Не отвечен" style="display:none;">
				<input type="text" name="eight" value="Не отвечен" style="display:none;">
				<input type="text" name="nine" value="Не отвечен" style="display:none;">
				<input type="text" name="ten" value="Не отвечен" style="display:none;">
			</form>

	<div class="test_question">
		<h4><span class="bold">Вопросы:</span> 1 из 10</h4>
		<h3>1.	Эффективный управленец это?</h3>
		<div class="radio first_ques">
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Человек, который имеет большой опыт в управлении Компании">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Человек, который имеет большой опыт в управлении Компании
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Человек, который умеет спросить с подчиненных результат">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Человек, который умеет спросить с подчиненных результат
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Человек, который умеет правильно ставить задачи">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Человек, который умеет правильно ставить задачи
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Человек, который умеет четко организовать бизнес-процессы в компании">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Человек, который умеет четко организовать бизнес-процессы в компании
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Человек, который умеет зарабатывать деньги">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Человек, который умеет зарабатывать деньги
			</label>
			<a class="cont">Следующий вопрос</a>
		</div>
	</div>

	<div class="test_question noactive_block_test">
		<h4><span class="bold">Вопросы:</span> 2 из 10</h4>
		<h3>2.	Каких людей нужно искать в команду?</h3>
		<div class="radio two_ques">
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Которые четко исполняют, то что им говорят">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Которые четко исполняют то, что им говорят
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Людей с высшим образованием">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Людей с высшим образованием
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Людей с опытом работы">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Людей с опытом работы
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Не слабее себя">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Не слабее себя
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Зарубежных специалистов">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Зарубежных специалистов
			</label>
			<a class="cont">Следующий вопрос</a>
		</div>
	</div>

	<div class="test_question noactive_block_test">
		<h4><span class="bold">Вопросы:</span> 3 из 10</h4>
		<h3>3.	Какой минимальный доход должен приносить эффективный управленец с активов в 1 млн.$?</h3>
		<div class="radio three_ques">
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- 50 000 $">
				<span class="label">
					<span class="circle"></span>
				</span>
				- 50 000 $ 
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- 10 %">
				<span class="label">
					<span class="circle"></span>
				</span>
				- 10 %
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Самоокупаемость, нет дохода">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Самоокупаемость, нет дохода
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- зависит от внешних факторов (динамика рынка, девальвация, сезонность)">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Зависит от внешних факторов (динамика рынка, девальвация, сезонность)
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- неограниченный">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Неограниченный
			</label>
			<a class="cont">Следующий вопрос</a>
		</div>
	</div>

	<div class="test_question noactive_block_test">
		<h4><span class="bold">Вопросы:</span> 4 из 10</h4>
		<h3>4.	Что для вас самое ценное?</h3>
		<div class="radio four_ques">
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- моя семья">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Моя семья
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- деньги">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Деньги
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Я сам">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Я сам
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- компания">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Компания
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- моральные ценности">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Моральные ценности
			</label>
			<a class="cont">Следующий вопрос</a>
		</div>
	</div>

	<div class="test_question noactive_block_test">
		<h4><span class="bold">Вопросы:</span> 5 из 10</h4>
		<h3>5.	Как найти человека сильней себя в команду?</h3>
			<textarea class="form-control" rows="6" placeholder="Напишите ответ"></textarea>
			<a class="cont">Следующий вопрос</a>
	</div>

	<div class="test_question noactive_block_test">
		<h4><span class="bold">Вопросы:</span> 6 из 10</h4>
		<h3>6.	Кто эффективному управленцу ставит цель?</h3>
		<div class="radio six_ques">
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Совет директоров	">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Совет директоров
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Сам себе">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Сам себе
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Учредитель">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Учредитель
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Начальник отдела">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Начальник отдела
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Члены семьи ">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Члены семьи 
			</label>
			<a class="cont">Следующий вопрос</a>
		</div>
	</div>

	<div class="test_question noactive_block_test">
		<h4><span class="bold">Вопросы:</span> 7 из 10</h4>
		<h3>7.	Если продажи упали во время кризиса, кто виноват?</h3>
		<div class="radio seven_ques">
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Внешние факторы">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Внешние факторы
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Отдел продаж">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Отдел продаж
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Управленец">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Управленец
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Никто не виноват, ситуация такая на рынке">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Никто не виноват, ситуация такая на рынке
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Клиенты">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Клиенты
			</label>
			<a class="cont">Следующий вопрос</a>
		</div>
	</div>

	<div class="test_question noactive_block_test">
		<h4><span class="bold">Вопросы:</span> 8 из 10</h4>
		<h3>8.	Что для вас приоритетно при выборе работы?</h3>
			<textarea class="form-control" rows="6" placeholder="Напишите ответ"></textarea>
			<a class="cont">Следующий вопрос</a>
	</div>

	<div class="test_question noactive_block_test">
		<h4><span class="bold">Вопросы:</span> 9 из 10</h4>
		<h3>9.	Как вы защитите мою собственность?</h3>
		<div class="radio nine_ques">
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Буду соблюдать все законы">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Буду соблюдать все законы
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Не буду рисковать">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Не буду рисковать
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Застрахую имущество">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Застрахую имущество
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Вызову экстрасенса">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Вызову экстрасенса
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Прибылью">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Прибылью
			</label>
			<a class="cont">Следующий вопрос</a>
		</div>
	</div>

	<div class="test_question noactive_block_test">
		<h4><span class="bold">Вопросы:</span> 10 из 10</h4>
		<h3>10.	 Как вы думаете почему только не большой процент населения зарабатывает больше 100 тыс.$?</h3>
		<div class="radio ten_ques">
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Не у всех есть стартовый капитал, чтобы столько зарабатывать">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Не у всех есть стартовый капитал, чтобы столько зарабатывать
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Родились не в той стране">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Родились не в той стране
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Не оказались в нужное время в нужном месте">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Не оказались в нужное время в нужном месте
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Не ищут способов, а находят причины почему не получается">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Не ищут способов, а находят причины почему не получается
			</label>
			<label class="clear">
				<input type="radio" name="optionsRadios" value="- Не у всех есть нужные связи">
				<span class="label">
					<span class="circle"></span>
				</span>
				- Не у всех есть нужные связи
			</label>
			<a class="cont">Закончить тест</a>
		</div>
	</div>

	<script>
		var values = {
			errors : 0,
			iter : 0,
		};
		values.inputs = [
			'first_ques',
			'two_ques',
			'three_ques',
			'four_ques',
			'',
			'six_ques',
			'seven_ques',
			'',
			'nine_ques',
			'ten_ques'
		];
		function addInputValue(){
		 return document.querySelector('.' + values.inputs[values.iter] + ' :checked').value;
		};
		values.answer = [
			'- Человек, который умеет зарабатывать деньги',
			'- Не слабее себя',
			'- неограниченный',
			'- Я сам',
			'',
			'- Сам себе',
			'- Управленец',
			'',
			'- Прибылью',
			'- Не ищут способов, а находят причины почему не получается',
		];
		values.form_input = [
			'one',
			'two',
			'three',
			'four',
			'five',
			'six',
			'seven',
			'eight',
			'nine',
			'ten'
		];
		values.block_ques = document.querySelectorAll('.radio');
	//document.querySelector('.first_ques input:checked').value
	// Проверка на правильность ответа
		values.check_answer = function(a){
			if (a === values.answer[values.iter]) return true; // Если отвеченное значение совпадает с тем, что выбрали то true
			else return false;
		};
	//Смена активных вопросов
		values.change_active_test= function(){
			if (values.iter !== 9){
				document.querySelectorAll('.test_question')[values.iter].classList.add('noactive_block_test');
				document.querySelectorAll('.test_question')[values.iter+1].classList.remove('noactive_block_test');
			};
		};
	//Занесение правильного ответа в форму отправки
		values.add_for_input = function(b){
			var verif = values.check_answer(b);
			if(verif){
				document.querySelector('input[name="'+values.form_input[values.iter]+'"]').setAttribute('value', values.answer[values.iter]);
				//Заменяем атрибут value в форме для отправки 
				values.change_active_test();//переключение вопросов
				values.iter++;
			}else{
				values.errors++;
				if(values.errors == 2){
					document.querySelector('input[name="'+values.form_input[values.iter]+'"]').setAttribute('value', '<span class="red_bg">Неправильно отвечен: '+ addInputValue() + ' </span>');
					document.forms.my.ques_ans.setAttribute('value',values.iter+1 + ' вопросов');
					//Если ошибки 2 то форму отправляем на обработку
					stopTiming();
					document.forms.my.submit();
				}else{
					document.querySelector('input[name="'+values.form_input[values.iter]+'"]').setAttribute('value', '<span class="red_bg">Неправильно отвечен: '+ addInputValue() + ' </span>');
					values.change_active_test();//переключение вопросов
					values.iter++;
				}
			};
			return verif;
		};
	// Обработка открытого вопроса
		values.open_ques = function(a){
			if (a === 1){
					document.querySelector('input[name="'+values.form_input[values.iter]+'"]').setAttribute('value', document.querySelectorAll('textarea')[0].value);
			}else if(a === 2){
					document.querySelector('input[name="'+values.form_input[values.iter]+'"]').setAttribute('value', document.querySelectorAll('textarea')[1].value);
			};
			values.change_active_test();
			values.iter++;
		};

		document.querySelectorAll('.cont')[0].addEventListener('click', function(){
			values.add_for_input(document.querySelector('.first_ques input:checked').value);
		});
		document.querySelectorAll('.cont')[1].addEventListener('click', function(){
			values.add_for_input(document.querySelector('.two_ques input:checked').value);
		});
		document.querySelectorAll('.cont')[2].addEventListener('click', function(){
			values.add_for_input(document.querySelector('.three_ques input:checked').value);
		});
		document.querySelectorAll('.cont')[3].addEventListener('click', function(){
			values.add_for_input(document.querySelector('.four_ques input:checked').value);
		});
		document.querySelectorAll('.cont')[4].addEventListener('click', function(){
			if(document.querySelectorAll('.form-control')[0].value != '') values.open_ques(1);
		});
		document.querySelectorAll('.cont')[5].addEventListener('click', function(){
			values.add_for_input(document.querySelector('.six_ques input:checked').value);
		});
		document.querySelectorAll('.cont')[6].addEventListener('click', function(){
			values.add_for_input(document.querySelector('.seven_ques input:checked').value);
		});
		document.querySelectorAll('.cont')[7].addEventListener('click', function(){
			if(document.querySelectorAll('.form-control')[1].value != '') values.open_ques(2);
		});
		document.querySelectorAll('.cont')[8].addEventListener('click', function(){
			values.add_for_input(document.querySelector('.nine_ques input:checked').value);
		});
		document.querySelectorAll('.cont')[9].addEventListener('click', function(){
			values.add_for_input(document.querySelector('.ten_ques input:checked').value);
			document.forms.my.check.setAttribute('value','Прошел');
			document.forms.my.ques_ans.setAttribute('value',values.iter+1 + ' вопросов');
			stopTiming();
			document.forms.my.submit();
		});

		var timing = {
			min : 0,
			sec : 0
		};
		function stopTiming(){
			clearInterval(timer);
			var second = timing.sec > 9 ? timing.sec : '0' + timing.sec;
			console.log(timing.min + ':' + second);
			document.forms.my.time.setAttribute('value',timing.min + ':' + second)
		};
	</script>
		<?php endif ?>
<?php endif ?>

		<script>
			var timer = setInterval(function(){
				if(timing.sec !== 59)
					timing.sec++;
				else{timing.min++;timing.sec = 0;}
			}, 1000);

			window.addEventListener('load',function(){
				history.pushState({page: 1}, "title 1", "?page=1");
				var t_d = new Date();
				document.querySelector('input[name="date_time"]').setAttribute('value', t_d.getDate() + '.' + (t_d.getMonth()+1) + '.' + (t_d.getYear()-100) );
			});
		</script>
</body>
</html>