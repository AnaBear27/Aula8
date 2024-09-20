<?php
	$visNome=@$_COOKIE["resNome"];
	$visCidade=@$_COOKIE["resCidade"];
?>

<!DOCTYPE HTML>
<html>

<head>
<title>Exercício</title>
	<meta charset="utf-8"/>
</head>

<body>
	<h3>Os cookies foram gravados:</h3>
	<?php
		echo "Nome: ".$visNome ." Cidade: ". $visCidade;
	?>
</body>
</html>