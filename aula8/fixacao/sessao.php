<?php
	session_start();
	$_SESSION['log'] = $_POST["login"];
	$_SESSION['sen'] = $_POST["senha"];
?>
<!DOCTYPE html>
<html>

<head>
<title>FORMULÁRIO DE CADASTRAMENTO</title>
<meta charset="utf-8"/>

</head>

<body>
<form name="meu_form" method="POST" action="cookies.php">
	<div id="area_form">
	<?php
		if($_SESSION['log']=="ana" and $_SESSION['sen']=="207"){
			header("location: catalogo.php");
		}else{
			echo "<script> alert('Dados Incorretos'); history.back()</script>";
		}
	?>
	</div>
</form>
</body>
</html>