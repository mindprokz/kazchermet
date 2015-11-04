<?php
$login = $_POST['login'];
$pass = $_POST['pass'];
?>
<!DOCTYPE html>
<?php if ($login === NULL): ?>
    <html id="result" lang="ru">
<?php else:?>
    <html lang="ru">
<?php endif?>
    <head>
    <meta charset="UTF-8">
    <title>Результаты теста</title>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css">
    <link rel="stylesheet" href="../../sass/style.min.css">
    <style>
        .close{
            display: none !important;
        }
        .open{
            display: table-row !important;
        }
    </style>
    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

</head>

<?php if ($login === NULL): ?>
<body class="admin_panel_enter">
    <form action="index.php" method="POST">
        <h3>Вход в админ панель</h3>
        <input type="text" name="login" class="form-control">
        <input type="password" name="pass" class="form-control">
        <label class="button">
            Войти
            <input type="submit" value="Отправить">
        </label>
    </form>
<?php else: ?>
<?php if ($login == 'admin' && $pass == 'abc123'): ?>   
<body class="admin_panel">  
<header><img src="../../img/logo.png" alt="logotype_test"></header>
<h3 class="bold">Результаты тестирования респондентов</h3>
<div id="tabs">
    <a href="#content1">Прошли тестирование</a>
    <a href="#content2">Не прошли тестирование</a>

    <div class="tabs_content">
      <div id="content1">
	        <label class="search_table">
	            <input id="tablesearchinput" class="search_admin" placeholder="поиск">
	        </label>
	        <table id="tabledata" border="0" cellpadding="0" width="90%" class="">
	            <thead>
	            <tr>
	                <th class="bold first">id</th>
	                <th class="bold">Имя</th>
	                <th class="bold">Email</th>
	                <th class="bold">Номер</th>
                    <th class="bold">Страна</th>
                    <th class="bold">Город</th>
                    <th class="bold last">Время</th>
	            </tr>
	            </thead>
	            <tbody>
	            <?php showPeopleTrue(); ?>
	            </tbody>
	        </table>
      </div>
      <div id="content2">
	        <label class="search_table">
	            <input id="tablesearchinput2" class="search_admin" placeholder="поиск">
	        </label>
	        <table id="tabledata2" border="0" cellpadding="0" width="90%" class="">
	            <thead>
	            <tr>
	                <th class="bold first">id</th>
	                <th class="bold">Имя</th>
	                <th class="bold">Email</th>
	                <th class="bold">Номер</th>
                    <th class="bold">Страна</th>
                    <th class="bold">Город</th>
                    <th class="bold last">Время</th>
	            </tr>
	            </thead>
	            <tbody>
	            <?php showPeopleFalse(); ?>
	            </tbody>
	        </table>      	
      </div>
    </div>
</div> 
    <script src="search.js"></script>
    <script>
	    $("#tabledata").searcher({
	        inputSelector: "#tablesearchinput"
	        // itemSelector (tbody > tr) and textSelector (td) already have proper default values
	    });
	    $("#tabledata2").searcher({
	        inputSelector: "#tablesearchinput2"
	        // itemSelector (tbody > tr) and textSelector (td) already have proper default values
	    });
	    $("#tabs>a").click( function () {
        
	        $("#tabs>a").removeClass("current");
	        $(this).addClass("current");
        
	        $(".tabs_content>div").hide();
	        t_content=$(this).attr("href");
	        $(t_content).show();

        	return false
    	});
		$("#tabs>a:first").trigger("click");
    </script>
<?php else: ?>
    <h3>Не правильный логин или пароль</h3>
<?php endif ?>

<?php endif ?>

<?php
function connect_db()
{
    $mysqli_infunc = new mysqli('srv-db-plesk06.ps.kz:3306', 'kz123_test1', 'Admin123', 'kz123161_test11');
    return $mysqli_infunc;
};


function showPeopleTrue()
{
    $mysqli = connect_db();
    echo $mysqli->connect_error;
    $result = $mysqli->query('SELECT * FROM test1');
    while ($rows = $result->fetch_assoc())
    {
        if($rows[check_us] == 'Прошел') {
            echo '<tr data-active="false" data-parent="lines'.$rows[id].'" class="parent_click">
                    <td class="id">' . $rows[id] . '</td>
                    <td>' . $rows[name] . '</td>
                    <td>' . $rows[email] . '</td>
                    <td>' . $rows[numbers] . '</td>
                    <td>' . $rows[country] . '</td>
                    <td>' . $rows[city] . '</td>
                    <td>' . $rows[time] . '</td>
                </tr>
                <tr id="lines'.$rows[id].'" class="close">
                    <td class="tr_table" colspan="7">
                        <table class="table_answer">
                            <tr class="answer lines'.$rows[id].' close">
                                <td>Вопрос №1</td>
                                <td>'.$rows[one].'</td>
                            </tr>
                            <tr class="answer lines'.$rows[id].' close">
                                <td>Вопрос №2</td>
                                <td>'.$rows[two].'</td>
                            </tr>
                            <tr class="answer lines'.$rows[id].' close">
                                <td>Вопрос №3</td>
                                <td>'.$rows[three].'</td>
                            </tr>
                            <tr class="answer lines'.$rows[id].' close">
                                <td>Вопрос №4</td>
                                <td>'.$rows[four].'</td>
                            </tr>
                            <tr class="answer lines'.$rows[id].' close">
                                <td>Вопрос №5</td>
                                <td>'.$rows[five].'</td>
                            </tr>
                            <tr class="answer lines'.$rows[id].' close">
                                <td>Вопрос №6</td>
                                <td>'.$rows[six].'</td>
                            </tr>
                            <tr class="answer lines'.$rows[id].' close">
                                <td>Вопрос №7</td>
                                <td>'.$rows[seven].'</td>
                            </tr>
                            <tr class="answer lines'.$rows[id].' close">
                                <td>Вопрос №8</td>
                                <td>'.$rows[eight].'</td>
                            </tr>
                            <tr class="answer lines'.$rows[id].' close">
                                <td>Вопрос №9</td>
                                <td>'.$rows[nine].'</td>
                            </tr>
                            <tr class="answer lines'.$rows[id].' close">
                                <td>Вопрос №10</td>
                                <td>'.$rows[ten].'</td>
                            </tr>
                        </table>
                    </td>
                </tr>';
        }
    }
};
function showPeopleFalse()
{
    $mysqli = connect_db();
    echo $mysqli->connect_error;
    $result = $mysqli->query('SELECT * FROM test1');
    while ($rows = $result->fetch_assoc())
    {
        if($rows[check_us] == 'Не прошел') {
            echo '<tr  data-active="false" data-parent="lines'.$rows[id].'" class="parent_click">
                    <td class="id">' . $rows[id] . '</td>
                    <td>' . $rows[name] . '</td>
                    <td>' . $rows[email] . '</td>
                    <td>' . $rows[numbers] . '</td>
                    <td>' . $rows[country] . '</td>
                    <td>' . $rows[city] . '</td>
                    <td>' . $rows[time] . '</td>
                </tr>
                <tr id="lines'.$rows[id].'" class="close">
                    <td class="tr_table" colspan="7">
                        <table class="table_answer">
                            <tr class="answer lines'.$rows[id].' close">
                                <td>Вопрос №1</td>
                                <td>'.$rows[one].'</td>
                            </tr>
                            <tr class="answer lines'.$rows[id].' close">
                                <td>Вопрос №2</td>
                                <td>'.$rows[two].'</td>
                            </tr>
                            <tr class="answer lines'.$rows[id].' close">
                                <td>Вопрос №3</td>
                                <td>'.$rows[three].'</td>
                            </tr>
                            <tr class="answer lines'.$rows[id].' close">
                                <td>Вопрос №4</td>
                                <td>'.$rows[four].'</td>
                            </tr>
                            <tr class="answer lines'.$rows[id].' close">
                                <td>Вопрос №5</td>
                                <td>'.$rows[five].'</td>
                            </tr>
                            <tr class="answer lines'.$rows[id].' close">
                                <td>Вопрос №6</td>
                                <td>'.$rows[six].'</td>
                            </tr>
                            <tr class="answer lines'.$rows[id].' close">
                                <td>Вопрос №7</td>
                                <td>'.$rows[seven].'</td>
                            </tr>
                            <tr class="answer lines'.$rows[id].' close">
                                <td>Вопрос №8</td>
                                <td>'.$rows[eight].'</td>
                            </tr>
                            <tr class="answer lines'.$rows[id].' close">
                                <td>Вопрос №9</td>
                                <td>'.$rows[nine].'</td>
                            </tr>
                            <tr class="answer lines'.$rows[id].' close">
                                <td>Вопрос №10</td>
                                <td>'.$rows[ten].'</td>
                            </tr>
                        </table>
                    </td>
                </tr>';
        }
    }
};
?>
<script type="text/javascript">
	$('.parent_click').on('click',function(){
		if($(this).attr('data-active') === 'false'){
			$('#' + $(this).attr('data-parent') ).removeClass('close').addClass('open');
            $('.' + $(this).attr('data-parent') ).removeClass('close').addClass('open');
			$(this).attr('data-active','true');
		}else{
			$('#' + $(this).attr('data-parent') ).removeClass('open').addClass('close');
            $('.' + $(this).attr('data-parent') ).removeClass('open').addClass('open');
			$(this).attr('data-active','false');			
		}
	})
</script>
</body>
</html>