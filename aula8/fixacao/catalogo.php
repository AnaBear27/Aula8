<?php
	session_start();
?>
<!DOCTYPE HTML>

<html>

<head>
<title>FORMULÁRIO DE CADASTRAMENTO</title>
<meta charset="utf-8"/>
</head>

<body>
<form name="meu_form" method="POST" action="cookies.php">
	<div id="area_form">
		<?php
			echo "Seja Bem-Vindo: ".$_SESSION['log'];
		?>
	</div>
</form>
</body>
</html>