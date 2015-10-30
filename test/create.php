<!-- 
	@ Сделать открытые вопросы 
	@ Вынести  js в отдельный файл
 -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style>
	.noactive_block_test{
		display: none;
	}
	</style>
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
	function create_people($name, $email,$number,$check){
		$mysqli = connect_db();
		$mysqli->query("INSERT INTO test1 
						(name, email, numbers,check_us)
						VALUES 
						('$name','$email', '$number','$check')
						");
	};
	$check = false;
	function check_people(){
		$mysqli = connect_db();
		$result = $mysqli->query('SELECT * FROM test1');
		$rows = '';
		while($rows = $result->fetch_assoc()){
			if($rows[numbers] == $_POST['numbers']){
				return true;
			};
		};
	};
	$check = check_people();
?>
<?php if(!$_POST['name']):?>
	<h3>Заполните анкету</h3>
	<?php else:?>
	<? if($check): ?>
		<h3>Вы проходили тест</h3>
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
		<h3>1.	Эффективный управленец это?</h3>
		<div class="radio first_ques">
			<label>
				<input type="radio" name="optionsRadios" value="- Человек, который имеет большой опыт в управлении Компании">
				- Человек, который имеет большой опыт в управлении Компании
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Человек, который умеет спросить с подчиненных результат">
				- Человек, который умеет спросить с подчиненных результат
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Человек, который умеет правильно ставить задачи">
				- Человек, который умеет правильно ставить задачи
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Человек, который умеет четко организовать бизнес-процессы в компании">
				- Человек, который умеет четко организовать бизнес-процессы в компании
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Человек, который умеет зарабатывать деньги">
				- Человек, который умеет зарабатывать деньги
			</label> <br>
			<a class="cont">Следующий</a>
		</div>
	</div>

	<div class="test_question noactive_block_test">
		<h3>2.	Каких людей нужно искать в команду?</h3>
		<div class="radio two_ques">
			<label>
				<input type="radio" name="optionsRadios" value="- Которые четко исполняют, то что им говорят">
				- Которые четко исполняют, то что им говорят
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Людей с высшим образованием">
				- Людей с высшим образованием
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Людей с опытом работы">
				- Людей с опытом работы
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Не слабее себя">
				- Не слабее себя
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Зарубежных специалистов">
				- Зарубежных специалистов
			</label> <br>
			<a class="cont">Следующий</a>
		</div>
	</div>

	<div class="test_question noactive_block_test">
		<h3>3.	Какой минимальный доход должен приносить эффективный управленец с активов в 1 млн.$?</h3>
		<div class="radio three_ques">
			<label>
				<input type="radio" name="optionsRadios" value="- 50 000 $">
				- 50 000 $ 
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- 10 $">
				- 10 $
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Самоокупаемость, нет дохода">
				- Самоокупаемость, нет дохода
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- зависит от внешних факторов (динамика рынка, девальвация, сезонность)">
				- зависит от внешних факторов (динамика рынка, девальвация, сезонность)
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- неограниченный">
				- неограниченный
			</label> <br>
			<a class="cont">Следующий</a>
		</div>
	</div>

	<div class="test_question noactive_block_test">
		<h3>4.	Что для вас самое ценное?</h3>
		<div class="radio four_ques">
			<label>
				<input type="radio" name="optionsRadios" value="- моя семья">
				- моя семья
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- деньги">
				- деньги
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- я сам">
				- я сам
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- компания">
				- компания
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- моральные ценности">
				- моральные ценности
			</label> <br>
			<a class="cont">Следующий</a>
		</div>
	</div>

	<div class="test_question noactive_block_test">
		<h3>5.	Как найти человека сильней себя в команду?</h3>
			<textarea class="form-control" rows="6"></textarea>
			<a class="cont">Следующий</a>
	</div>

	<div class="test_question noactive_block_test">
		<h3>6.	Кто эффективному управленцу ставит цель?</h3>
		<div class="radio six_ques">
			<label>
				<input type="radio" name="optionsRadios" value="- Совет директоров	">
				- Совет директоров
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Сам себе">
				- Сам себе
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Учредитель">
				- Учредитель
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Начальник отдела">
				- Начальник отдела
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Члены семьи ">
				- Члены семьи 
			</label> <br>
			<a class="cont">Следующий</a>
		</div>
	</div>

	<div class="test_question noactive_block_test">
		<h3>7.	Если продажи упали во время кризиса, кто виноват?</h3>
		<div class="radio seven_ques">
			<label>
				<input type="radio" name="optionsRadios" value="- Внешние факторы">
				- Внешние факторы
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Отдел продаж">
				- Отдел продаж
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Управленец">
				- Управленец
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Никто не виноват, ситуация такая на рынке">
				- Никто не виноват, ситуация такая на рынке
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Клиенты">
				- Клиенты
			</label> <br>
			<a class="cont">Следующий</a>
		</div>
	</div>

	<div class="test_question noactive_block_test">
		<h3>8.	Что для вас приоритетно при выборе работы?</h3>
			<textarea class="form-control" rows="6"></textarea>
			<a class="cont">Следующий</a>
	</div>

	<div class="test_question noactive_block_test">
		<h3>9.	Как вы защитите мою собственность?</h3>
		<div class="radio nine_ques">
			<label>
				<input type="radio" name="optionsRadios" value="- Буду соблюдать все законы">
				- Буду соблюдать все законы
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Не буду рисковать">
				- Не буду рисковать
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Застрахую имущество">
				- Застрахую имущество
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Вызову экстрасенса">
				- Вызову экстрасенса
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Прибылью">
				- Прибылью
			</label> <br>
			<a class="cont">Следующий</a>
		</div>
	</div>

	<div class="test_question noactive_block_test">
		<h3>10.	 Как вы думаете почему только не большой процент населения зарабатывает больше 100 тыс.$?</h3>
		<div class="radio ten_ques">
			<label>
				<input type="radio" name="optionsRadios" value="- Не у всех есть стартовый капитал, чтобы столько зарабатывать">
				- Не у всех есть стартовый капитал, чтобы столько зарабатывать
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Родились не в той стране">
				- Родились не в той стране
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Не оказались в нужное время в нужном месте">
				- Не оказались в нужное время в нужном месте
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Не ищут способов, а находят причины почему не получается">
				- Не ищут способов, а находят причины почему не получается
			</label> <br>
			<label>
				<input type="radio" name="optionsRadios" value="- Не у всех есть нужные связи">
				- Не у всех есть нужные связи
			</label> <br>
			<a class="cont">Закончить тест</a>
		</div>
	</div>

	<script>
		var values = {
			errors : 0,
			iter : 0,
		};
		values.answer = [
			'- Человек, который умеет зарабатывать деньги',
			'- Не слабее себя',
			'- неограниченный',
			'- я сам',
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
					//Если ошибки 2 то форму отправляем на обработку
					document.forms.my.submit();
				}else{
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
			values.open_ques(1);
		});
		document.querySelectorAll('.cont')[5].addEventListener('click', function(){
			values.add_for_input(document.querySelector('.six_ques input:checked').value);
		});
		document.querySelectorAll('.cont')[6].addEventListener('click', function(){
			values.add_for_input(document.querySelector('.seven_ques input:checked').value);
		});
		document.querySelectorAll('.cont')[7].addEventListener('click', function(){
			values.open_ques(2);
		});
		document.querySelectorAll('.cont')[8].addEventListener('click', function(){
			values.add_for_input(document.querySelector('.nine_ques input:checked').value);
		});
		document.querySelectorAll('.cont')[9].addEventListener('click', function(){
			values.add_for_input(document.querySelector('.ten_ques input:checked').value);
			document.forms.my.check.setAttribute('value','Прошел');
			document.forms.my.submit();
		});
	</script>
		<?php endif ?>
<?php endif ?>
</body>
</html>