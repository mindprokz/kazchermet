<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style type="text/css">
    	.close{
    		display: none !important;
    	}
    	.open{
    		display: table-row !important;
    	}
    </style>
</head>
<body>

<?php
$login = $_POST['login'];
$pass = $_POST['pass'];
?>

<?php if ($login === NULL): ?>
    <form action="index.php" method="POST">
        <input type="text" name="login" class="form-control">
        <input type="text" name="pass" class="form-control">
        <input type="submit" type="button" class="btn btn-success" value="Отправить">
    </form>
<?php else: ?>
<?php if ($login == 'admin' && $pass == 'abc123'): ?>     
<div id="tabs">
    <a href="#content1">Вкладка 1</a>
    <a href="#content2">Вкладка 2</a>

    <div class="tabs_content">
      <div id="content1">
	        <label>
	            Поиск по таблице
	            <input id="tablesearchinput" />
	        </label>
	        <table id="tabledata" border="1" cellpadding="5" width="100%" class="">
	            <thead>
	            <tr>
	                <th>id</th>
	                <th>Имя</th>
	                <th>Email</th>
	                <th>Номер</th>
                    <th>Страна</th>
                    <th>Город</th>
                    <th>Время</th>
	            </tr>
	            </thead>
	            <tbody>
	            <?php showPeopleTrue(); ?>
	            </tbody>
	        </table>
      </div>
      <div id="content2">
	        <label>
	            Поиск по таблице
	            <input id="tablesearchinput2" />
	        </label>
	        <table id="tabledata2" border="1" cellpadding="5" width="100%" class="">
	            <thead>
	            <tr>
	                <th>id</th>
	                <th>Имя</th>
	                <th>Email</th>
	                <th>Номер</th>
                    <th>Страна</th>
                    <th>Город</th>
                    <th>Время</th>
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
                    <th>' . $rows[id] . '</th>
                    <td>' . $rows[name] . '</td>
                    <td>' . $rows[email] . '</td>
                    <td>' . $rows[numbers] . '</td>
                    <td>' . $rows[country] . '</td>
                    <td>' . $rows[city] . '</td>
                    <td>' . $rows[time] . '</td>
                </tr>
                <tr id="lines'.$rows[id].'" class="close">
                    <td colspan="7">
                        <table>
                            <tr class="lines'.$rows[id].' close">
                                <td>Вопрос №1</td>
                                <td>'.$rows[one].'</td>
                            </tr>
                            <tr class="lines'.$rows[id].' close">
                                <td>Вопрос №2</td>
                                <td>'.$rows[two].'</td>
                            </tr>
                            <tr class="lines'.$rows[id].' close">
                                <td>Вопрос №3</td>
                                <td>'.$rows[three].'</td>
                            </tr>
                            <tr class="lines'.$rows[id].' close">
                                <td>Вопрос №4</td>
                                <td>'.$rows[four].'</td>
                            </tr>
                            <tr class="lines'.$rows[id].' close">
                                <td>Вопрос №5</td>
                                <td>'.$rows[five].'</td>
                            </tr>
                            <tr class="lines'.$rows[id].' close">
                                <td>Вопрос №6</td>
                                <td>'.$rows[six].'</td>
                            </tr>
                            <tr class="lines'.$rows[id].' close">
                                <td>Вопрос №7</td>
                                <td>'.$rows[seven].'</td>
                            </tr>
                            <tr class="lines'.$rows[id].' close">
                                <td>Вопрос №8</td>
                                <td>'.$rows[eight].'</td>
                            </tr>
                            <tr class="lines'.$rows[id].' close">
                                <td>Вопрос №9</td>
                                <td>'.$rows[nine].'</td>
                            </tr>
                            <tr class="lines'.$rows[id].' close">
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
                    <th>' . $rows[id] . '</th>
                    <td>' . $rows[name] . '</td>
                    <td>' . $rows[email] . '</td>
                    <td>' . $rows[numbers] . '</td>
                    <td>' . $rows[country] . '</td>
                    <td>' . $rows[city] . '</td>
                    <td>' . $rows[time] . '</td>
                </tr>
                <tr id="lines'.$rows[id].'" class="close">
                    <td colspan="7">
                        <table>
                            <tr class="lines'.$rows[id].' close">
                                <td>Вопрос №1</td>
                                <td>'.$rows[one].'</td>
                            </tr>
                            <tr class="lines'.$rows[id].' close">
                                <td>Вопрос №2</td>
                                <td>'.$rows[two].'</td>
                            </tr>
                            <tr class="lines'.$rows[id].' close">
                                <td>Вопрос №3</td>
                                <td>'.$rows[three].'</td>
                            </tr>
                            <tr class="lines'.$rows[id].' close">
                                <td>Вопрос №4</td>
                                <td>'.$rows[four].'</td>
                            </tr>
                            <tr class="lines'.$rows[id].' close">
                                <td>Вопрос №5</td>
                                <td>'.$rows[five].'</td>
                            </tr>
                            <tr class="lines'.$rows[id].' close">
                                <td>Вопрос №6</td>
                                <td>'.$rows[six].'</td>
                            </tr>
                            <tr class="lines'.$rows[id].' close">
                                <td>Вопрос №7</td>
                                <td>'.$rows[seven].'</td>
                            </tr>
                            <tr class="lines'.$rows[id].' close">
                                <td>Вопрос №8</td>
                                <td>'.$rows[eight].'</td>
                            </tr>
                            <tr class="lines'.$rows[id].' close">
                                <td>Вопрос №9</td>
                                <td>'.$rows[nine].'</td>
                            </tr>
                            <tr class="lines'.$rows[id].' close">
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