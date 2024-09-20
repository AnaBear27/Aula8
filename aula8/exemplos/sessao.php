<?php
	session_start();
	$_SESSION['log'] = $_POST["login"];
	$_SESSION['sen'] = $_POST["senha"];
?>
<!DOCTYPE html>
<html>
<head>
<title>Formulário</title>
<meta charset="utf-8"/>
</head>

<body>
<form name="meu_form" method="POST" action="cookies.php">
	<div id="area_form">
	<?php
		if($_SESSION['log']=="adm" and $_SESSION['sen']=="845"){
			header("location: catalogo.php");
		}else{
			echo "<script> alert('Dados Incorretos'); history.back()</script>";
		}
	?>
	</div>
</form>
</body>
</html>