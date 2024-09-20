<?php
	$nome=$_POST["nome"];
	$cidade=$_POST["cidade"];
	setcookie("resNome",$nome, time()+60);
	setcookie("resCidade",$cidade, time()+60);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Exercício</title>
	<meta charset="utf-8"/>
</head>

<body>
	<h3>Os cookies de pesquisa foram gravados no navegador. Clique no link abaixo para visualiza-los.</h3>
	<a href="ler-cookies.php">VISUALIZAR COOKIES</a>
</body>
</html>