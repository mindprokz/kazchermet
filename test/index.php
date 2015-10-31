<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="shortcut icon" href="../img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="../img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="../72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="../114x114" href="img/favicon/apple-touch-icon-114x114.png">
	<link rel="stylesheet" href="../sass/style.min.css">
</head>
<body class="body_test">
	<header><img src="../img/logo.png" alt="logotype_test"></header>
	<h3 class="bold">Для того, чтобы начать тестирование, пожалуйста представьтесь</h3>
    <form action="create.php" method="POST">
    	<label class="clear">
	        <span>ФИО</span>
	        <input type="text" name="name" required placeholder="Фамилия имя">
        </label>
        <label class="clear">
	        <span>Номер</span>
	        <input type="tel" name="numbers" required placeholder="+77053381523">
        </label>
        <label class="clear">
	        <span>Страна</span>
	        <input type="text" name="country" required placeholder="Казахстан">
        </label>
        <label class="clear">
	        <span>Город</span>
	        <input type="text" name="city" required placeholder="Астана">
        </label>
        <label class="clear">
	        <span>E-mail</span>
	        <input type="email" name="email" required placeholder="example@mail.ru">
        </label>
    </form>
    <div class="content_enter_test clear">
    	<h2>В данном тесте представлено 10 вопросов (8 закрытых и 2 открытых).</h2>
    	<p>Вам будет предложено 5 вариантов ответов. правильный ответ только один. В закрытых вопросах вы можете ошибиться только один раз. Время на прохождение теста неограничено. Правильные ответы выражают философию и точку зрения компании.</p>
    	<p>Просим отнестись к данной задаче серьезно, так как возможность ответить будет один раз. <br> <span class="bold">Если вы готовы нажмите на кнопку ниже:</span></p>
    	<a id="submit_button" class="button_enter bold"><img src="../img/ico.png" alt="icon"><span class="button_text">Начать тестирование</span></a>
    </div>
</body>
</html>