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
	$check = false;
	function check_people(){
		$mysqli = connect_db();
		$result = $mysqli->query('SELECT * FROM test1');
		$rows = '';
		while($rows = $result->fetch_assoc()){
			print_r($rows);
			echo "<br>";
			if( $rows[numbers] == '8705338152'){
				return true;
			}
		};
	};

	// $mysqli = new mysqli('srv-db-plesk06.ps.kz:3306','kz123_test1','Admin123','kz123161_test11');
	// $result = $mysqli->query('SELECT * FROM test1');
	// $rows = '';
	// while($rows = $result->fetch_assoc()){
	// 	print_r($rows);
	// };
	$check = check_people();
	if ($check){
		echo "yes";
	}else{
		echo "false";
	}
	?>
</body>
</html>