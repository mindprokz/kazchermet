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
	<link rel="stylesheet" href="../css/style.min.css">
	<link rel="shortcut icon" href="http://kazchermet.com/favicon.ico" type="image/x-icon">

</head>
<body class="body_test">
	<header><img src="../img/logo.png" alt="logotype_test"></header>
	<h3 class="bold">Для того чтобы начать тестирование, пожалуйста, представьтесь</h3>
    <form name="main_data" id="main_data" action="create.php" method="POST">
    	<label class="clear">
	        <span>ФИО</span>
	        <input type="text" id="name_test" name="name" required placeholder="Фамилия имя">
        </label>
        <label class="clear">
	        <span>Номер</span>
	        <input type="tel"  id="numbers_test" name="numbers" required maxlength="11" pattern="[0-9]{11}" placeholder="87051234567">
        </label>
        <label class="clear">
	        <span>Страна</span>
	        <!-- <input type="text" id="country_test" name="country" required placeholder="Казахстан"> -->
			<select name="country" id="country_test" required>
				<option>Выберите страну</option>
				<option>Абхазия</option>
				<option>Австралия</option>
				<option>Австрия</option>
				<option>Азербайджан</option>
				<option>Азорские острова</option>
				<option>Аландские острова</option>
				<option>Албания</option>
				<option>Алжир</option>
				<option>Американское Самоа</option>
				<option>Ангилья</option>
				<option>Ангола</option>
				<option>Андорра</option>
				<option>Антарктика</option>
				<option>Антигуа и Барбуда</option>
				<option>Антильские Острова</option>
				<option>Аомынь</option>
				<option>Аргентина</option>
				<option>Армения</option>
				<option>Аруба</option>
				<option>Афганистан</option>
				<option>Багамские Острова</option>
				<option>Бангладеш</option>
				<option>Барбадос</option>
				<option>Бахрейн</option>
				<option>Беларусь</option>
				<option>Белиз</option>
				<option>Бельгия</option>
				<option>Бенин</option>
				<option>Бермудские Острова</option>
				<option>Болгария</option>
				<option>Боливия</option>
				<option>Босния и Герцеговина</option>
				<option>Ботсвана</option>
				<option>Бразилия</option>
				<option>Британская территория в Индийском океане</option>
				<option>Бруней</option>
				<option>Буве</option>
				<option>Буркина-Фасо</option>
				<option>Бурунди</option>
				<option>Бутан</option>
				<option>Вануату</option>
				<option>Ватикан</option>
				<option>Великобритания</option>
				<option>Венгрия</option>
				<option>Венесуэла</option>
				<option>Виргинские Острова (Британские)</option>
				<option>Виргинские Острова (США)</option>
				<option>Внешние малые острова (США)</option>
				<option>Восточный Тимор</option>
				<option>Вьетнам</option>
				<option>Габон</option>
				<option>Гаити</option>
				<option>Гайана</option>
				<option>Гамбия</option>
				<option>Гана</option>
				<option>Гваделупа</option>
				<option>Гватемала</option>
				<option>Гвиана</option>
				<option>Гвинея</option>
				<option>Гвинея-Бисау</option>
				<option>Германия</option>
				<option>Гернси</option>
				<option>Гибралтар</option>
				<option>Гондурас</option>
				<option>Гонконг</option>
				<option>Гренада</option>
				<option>Гренландия</option>
				<option>Греция</option>
				<option>Грузия</option>
				<option>Гуам</option>
				<option>Дания</option>
				<option>Джерси</option>
				<option>Джибути</option>
				<option>Доминика</option>
				<option>Доминиканская Республика</option>
				<option>Египет</option>
				<option>Замбия</option>
				<option>Западная Сахара</option>
				<option>Зимбабве</option>
				<option>Израиль</option>
				<option>Индия</option>
				<option>Индонезия</option>
				<option>Иордания</option>
				<option>Ирак</option>
				<option>Иран</option>
				<option>Ирландия</option>
				<option>Исландия</option>
				<option>Испания</option>
				<option>Италия</option>
				<option>Йемен</option>
				<option>Кабо-Верде</option>
				<option>Казахстан</option>
				<option>Каймановы Острова</option>
				<option>Камбоджа</option>
				<option>Камерун</option>
				<option>Канада</option>
				<option>Катар</option>
				<option>Кения</option>
				<option>Кипр</option>
				<option>Кирибати</option>
				<option>Китай</option>
				<option>Кокосовые Острова</option>
				<option>Колумбия</option>
				<option>Коморские Острова</option>
				<option>Конго, Демократическая Республика</option>
				<option>Корея (Северная)</option>
				<option>Корея (Южная)</option>
				<option>Косово</option>
				<option>Коста-Рика</option>
				<option>Кот-д'Ивуар</option>
				<option>Куба</option>
				<option>Кувейт</option>
				<option>Кука острова</option>
				<option>Кыргызстан</option>
				<option>Лаос</option>
				<option>Латвия</option>
				<option>Лесото</option>
				<option>Либерия</option>
				<option>Ливан</option>
				<option>Ливия</option>
				<option>Литва</option>
				<option>Лихтенштейн</option>
				<option>Люксембург</option>
				<option>Маврикий</option>
				<option>Мавритания</option>
				<option>Мадагаскар</option>
				<option>Майотта</option>
				<option>Македония</option>
				<option>Малави</option>
				<option>Малайзия</option>
				<option>Мали</option>
				<option>Мальдивы</option>
				<option>Мальта</option>
				<option>Мартиника</option>
				<option>Маршалловы Острова</option>
				<option>Мексика</option>
				<option>Микронезия</option>
				<option>Мозамбик</option>
				<option>Молдова</option>
				<option>Монако</option>
				<option>Монголия</option>
				<option>Монтсеррат</option>
				<option>Морокко</option>
				<option>Мьянма</option>
				<option>Нагорно-Карабахская Республика</option>
				<option>Намибия</option>
				<option>Науру</option>
				<option>Непал</option>
				<option>Нигер</option>
				<option>Нигерия</option>
				<option>Нидерланды</option>
				<option>Никарагуа</option>
				<option>Ниуэ</option>
				<option>Новая Зеландия</option>
				<option>Новая Каледония</option>
				<option>Норвегия</option>
				<option>Норфолк</option>
				<option>Объединенные Арабские Эмираты</option>
				<option>Оман</option>
				<option>Остров Мэн</option>
				<option>Остров Рождества</option>
				<option>Остров Святой Елены</option>
				<option>Острова Уоллис и Футуна</option>
				<option>Острова Херд и Макдональд</option>
				<option>Пакистан</option>
				<option>Палау</option>
				<option>Палестина</option>
				<option>Панама</option>
				<option>Папуа — Новая Гвинея</option>
				<option>Парагвай</option>
				<option>Перу</option>
				<option>Питкэрн</option>
				<option>Польша</option>
				<option>Португалия</option>
				<option>Приднестровье</option>
				<option>Пуэрто-Рико</option>
				<option>Республика Конго</option>
				<option>Реюньон</option>
				<option>Россия</option>
				<option>Руанда</option>
				<option>Румыния</option>
				<option>Сальвадор</option>
				<option>Самоа</option>
				<option>Сан-Марино</option>
				<option>Сан-Томе и Принсипи</option>
				<option>Саудовская Аравия</option>
				<option>Свазиленд</option>
				<option>Свальбард</option>
				<option>Северные Марианские острова</option>
				<option>Сейшельские острова</option>
				<option>Сен-Пьер и Микелон</option>
				<option>Сенегал</option>
				<option>Сент-Винсент и Гренадины</option>
				<option>Сент-Киттс и Невис</option>
				<option>Сент-Люсия</option>
				<option>Сербия</option>
				<option>Сингапур</option>
				<option>Сирия</option>
				<option>Словакия</option>
				<option>Словения</option>
				<option>Соединенные Штаты Америки</option>
				<option>Соломоновы Острова</option>
				<option>Сомали</option>
				<option>Сомалиленд</option>
				<option>Судан</option>
				<option>Суринам</option>
				<option>Сьерра-Леоне</option>
				<option>Таджикистан</option>
				<option>Таиланд</option>
				<option>Тайвань</option>
				<option>Тамил-Илам</option>
				<option>Танзания</option>
				<option>Тёркс и Кайкос</option>
				<option>Того</option>
				<option>Токелау</option>
				<option>Тонга</option>
				<option>Тринидад и Тобаго</option>
				<option>Тувалу</option>
				<option>Тунис</option>
				<option>Турецкая Республика Северного Кипра</option>
				<option>Туркменистан</option>
				<option>Турция</option>
				<option>Уганда</option>
				<option>Узбекистан</option>
				<option>Украин</option>
				<option>Уругвай</option>
				<option>Фарерские Острова</option>
				<option>Фиджи</option>
				<option>Филиппины</option>
				<option>Финляндия</option>
				<option>Фолклендские (Мальвинские) острова</option>
				<option>Франция</option>
				<option>Французская Полинезия</option>
				<option>Французские Южные и Антарктические Территории</option>
				<option>Хорватия</option>
				<option>Центральноафриканская Республика</option>
				<option>Чад</option>
				<option>Черногория</option>
				<option>Чехия</option>
				<option>Чили</option>
				<option>Швейцария</option>
				<option>Швеция</option>
				<option>Шри-Ланка</option>
				<option>Эквадор</option>
				<option>Экваториальная Гвинея</option>
				<option>Эритрея</option>
				<option>Эстония</option>
				<option>Эфиопия</option>
				<option>Южная Георгия и Южные Сандвичевы острова</option>
				<option>Южная Осетия</option>
				<option>Южно-Африканская Республика</option>
				<option>Ямайка</option>
				<option>Япония</option>
			</select>
        </label>
        <label class="clear">
	        <span>Город</span>
	        <input type="text" id="city_test" name="city" required placeholder="Астана">
        </label>
        <label class="clear">
	        <span>E-mail</span>
	        <input type="email" id="email_test" name="email" required placeholder="example@mail.ru">
        </label>
    </form>
    <div class="content_enter_test clear">
    	<h2>В данном тесте представлено 10 вопросов (8 закрытых и 2 открытых).</h2>
    	<p>Вам будет предложено 5 вариантов ответов. Правильный ответ только один. В закрытых вопросах вы можете ошибиться только один раз. Время на прохождение теста неограничено. Правильные ответы выражают философию и точку зрения компании.</p>
    	<p>Просим отнестись к данной задаче серьезно, так как возможность ответить будет один раз. <br> <span class="bold">Если вы готовы, нажмите на кнопку ниже:</span></p>
    	<a id="submit_button" class="button_enter bold"><input id="input_submit"><img src="../img/ico.png" alt="icon"><span class="button_text">Начать тестирование</span></a>
    </div>
<script>
	document.getElementById('input_submit').addEventListener('click',function(){
		if (check_name() && check_number() && check_country() && check_mail() ) document.getElementById('main_data').submit();
	});

	function check_name () {
		var a =	document.getElementById('name_test').value,
			result = false;

		if (a !== ''){
			for (var i = a.length - 1; i > 0; i--) {
				if(a[i] === ' '){
					result = true;
					return result;
				}
			}
			document.getElementById('name_test').value = '';
			document.getElementById('name_test').setAttribute('placeholder','Поле заполнено некорректно');
			return result;
		}else{
			document.getElementById('name_test').value = '';
			document.getElementById('name_test').setAttribute('placeholder','Поле незаполнено');
			return result;
		}
	}

	function check_number () {
		var a =	document.getElementById('numbers_test').value,
			result = false;
		if ( a !== '') {
			if (a.length == 11) {
				if ( document.getElementById('numbers_test').value.match( /[\D]/ ) === null ){
					result = true;
					return result;
				} else {
					document.getElementById('numbers_test').value = '';
					document.getElementById('numbers_test').setAttribute('placeholder','Поле заполнено некорректно');
					return result;
				}
			} else {
				document.getElementById('numbers_test').value = '';
				document.getElementById('numbers_test').setAttribute('placeholder','Поле заполнено некорректно');
				return result;
			}
		} else {
			document.getElementById('numbers_test').value = '';
			document.getElementById('numbers_test').setAttribute('placeholder','Поле незаполнено');
			return result;
		}
	}

	function check_mail () {
		var a =	document.getElementById('email_test').value,
			result = false;
		if (a !== ''){
			for (var i = a.length - 1; i >= 0; i--) {
				if ( a[i] === '@' ){
					result = true;
				}
			}	
			if( result){
				return result;
			} else {
				document.getElementById('email_test').value = '';
				document.getElementById('email_test').setAttribute('placeholder','Поле заполнено некорректно');
				return result;
			}
		} else {
			document.getElementById('email_test').value = '';
			document.getElementById('email_test').setAttribute('placeholder','Поле незаполнено');
			return result;
		}
	}

	function check_country () {
		var a = document.getElementById('country_test').value,
			result = false;

		for (var i = countres.length - 1; i >= 0; i--) {
			if ( countres[i] === a)
				result = true;
		};
		return result;
	}
var countres = [
		'Абхазия',
		'Австралия',
		'Австрия',
		'Азербайджан',
		'Азорские острова',
		'Аландские острова',
		'Албания',
		'Алжир',
		'Американское Самоа',
		'Ангилья',
		'Ангола',
		'Андорра',
		'Антарктика',
		'Антигуа и Барбуда',
		'Антильские Острова',
		'Аомынь',
		'Аргентина',
		'Армения',
		'Аруба',
		'Афганистан',
		'Багамские Острова',
		'Бангладеш',
		'Барбадос',
		'Бахрейн',
		'Беларусь',
		'Белиз',
		'Бельгия',
		'Бенин',
		'Бермудские Острова',
		'Болгария',
		'Боливия',
		'Босния и Герцеговина',
		'Ботсвана',
		'Бразилия',
		'Британская территория в Индийском океане',
		'Бруней',
		'Буве',
		'Буркина-Фасо',
		'Бурунди',
		'Бутан',
		'Вануату',
		'Ватикан',
		'Великобритания',
		'Венгрия',
		'Венесуэла',
		'Виргинские Острова (Британские)',
		'Виргинские Острова (США)',
		'Внешние малые острова (США)',
		'Восточный Тимор',
		'Вьетнам',
		'Габон',
		'Гаити',
		'Гайана',
		'Гамбия',
		'Гана',
		'Гваделупа',
		'Гватемала',
		'Гвиана',
		'Гвинея',
		'Гвинея-Бисау',
		'Германия',
		'Гернси',
		'Гибралтар',
		'Гондурас',
		'Гонконг',
		'Гренада',
		'Гренландия',
		'Греция',
		'Грузия',
		'Гуам',
		'Дания',
		'Джерси',
		'Джибути',
		'Доминика',
		'Доминиканская Республика',
		'Египет',
		'Замбия',
		'Западная Сахара',
		'Зимбабве',
		'Израиль',
		'Индия',
		'Индонезия',
		'Иордания',
		'Ирак',
		'Иран',
		'Ирландия',
		'Исландия',
		'Испания',
		'Италия',
		'Йемен',
		'Кабо-Верде',
		'Казахстан',
		'Каймановы Острова',
		'Камбоджа',
		'Камерун',
		'Канада',
		'Катар',
		'Кения',
		'Кипр',
		'Кирибати',
		'Китай',
		'Кокосовые Острова',
		'Колумбия',
		'Коморские Острова',
		'Конго, Демократическая Республика',
		'Корея (Северная)',
		'Корея (Южная)',
		'Косово',
		'Коста-Рика',
		'Кот-д\'Ивуар',
		'Куба',
		'Кувейт',
		'Кука острова',
		'Кыргызстан',
		'Лаос',
		'Латвия',
		'Лесото',
		'Либерия',
		'Ливан',
		'Ливия',
		'Литва',
		'Лихтенштейн',
		'Люксембург',
		'Маврикий',
		'Мавритания',
		'Мадагаскар',
		'Майотта',
		'Македония',
		'Малави',
		'Малайзия',
		'Мали',
		'Мальдивы',
		'Мальта',
		'Мартиника',
		'Маршалловы Острова',
		'Мексика',
		'Микронезия',
		'Мозамбик',
		'Молдова',
		'Монако',
		'Монголия',
		'Монтсеррат',
		'Морокко',
		'Мьянма',
		'Нагорно-Карабахская Республика',
		'Намибия',
		'Науру',
		'Непал',
		'Нигер',
		'Нигерия',
		'Нидерланды',
		'Никарагуа',
		'Ниуэ',
		'Новая Зеландия',
		'Новая Каледония',
		'Норвегия',
		'Норфолк',
		'Объединенные Арабские Эмираты',
		'Оман',
		'Остров Мэн',
		'Остров Рождества',
		'Остров Святой Елены',
		'Острова Уоллис и Футуна',
		'Острова Херд и Макдональд',
		'Пакистан',
		'Палау',
		'Палестина',
		'Панама',
		'Папуа — Новая Гвинея',
		'Парагвай',
		'Перу',
		'Питкэрн',
		'Польша',
		'Португалия',
		'Приднестровье',
		'Пуэрто-Рико',
		'Республика Конго',
		'Реюньон',
		'Россия',
		'Руанда',
		'Румыния',
		'Сальвадор',
		'Самоа',
		'Сан-Марино',
		'Сан-Томе и Принсипи',
		'Саудовская Аравия',
		'Свазиленд',
		'Свальбард',
		'Северные Марианские острова',
		'Сейшельские острова',
		'Сен-Пьер и Микелон',
		'Сенегал',
		'Сент-Винсент и Гренадины',
		'Сент-Киттс и Невис',
		'Сент-Люсия',
		'Сербия',
		'Сингапур',
		'Сирия',
		'Словакия',
		'Словения',
		'Соединенные Штаты Америки',
		'Соломоновы Острова',
		'Сомали',
		'Сомалиленд',
		'Судан',
		'Суринам',
		'Сьерра-Леоне',
		'Таджикистан',
		'Таиланд',
		'Тайвань',
		'Тамил-Илам',
		'Танзания',
		'Тёркс и Кайкос',
		'Того',
		'Токелау',
		'Тонга',
		'Тринидад и Тобаго',
		'Тувалу',
		'Тунис',
		'Турецкая Республика Северного Кипра',
		'Туркменистан',
		'Турция',
		'Уганда',
		'Узбекистан',
		'Украин',
		'Уругвай',
		'Фарерские Острова',
		'Фиджи',
		'Филиппины',
		'Финляндия',
		'Фолклендские (Мальвинские) острова',
		'Франция',
		'Французская Полинезия',
		'Французские Южные и Антарктические Территории',
		'Хорватия',
		'Центральноафриканская Республика',
		'Чад',
		'Черногория',
		'Чехия',
		'Чили',
		'Швейцария',
		'Швеция',
		'Шри-Ланка',
		'Эквадор',
		'Экваториальная Гвинея',
		'Эритрея',
		'Эстония',
		'Эфиопия',
		'Южная Георгия и Южные Сандвичевы острова',
		'Южная Осетия',
		'Южно-Африканская Республика',
		'Ямайка',
		'Япония',
	];
</script>
</body>
</html>