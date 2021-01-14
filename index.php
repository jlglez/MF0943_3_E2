<!DOCTYPE html>
<html>
<head>
	<title>Examen E1</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
	<h1>Examen online E2. Módulo formativo MF0943_3</h1>
	<h2>Registro de Emails</h2>
	<?php
			echo "<p id=".$_GET['error'].">"; 
			if (isset($_GET)) {
				if ($_GET['error']=='e1') {
					$res="El correo electrónico <b>".$_GET['email']."</b> ya está registrado.";
				}
				elseif ($_GET['error']=='e0') {
						$res="Correo electrónico <b>".$_GET['email']."</b> registrado correctamente.";
				}
				elseif ($_GET['error']=='e2') {
						$res="Correo electrónico <b>".$_GET['email']."</b> no valido.<br>";
						$res.="Debe contener letras, números o puntos, seguido de @, el nombre del dominio, un punto, y los caracteres del tipo de dominio<br>";
						$res.="Ejemplo: mi.correo_personal@dominio.net";
				}
				echo ($res);
			}
			echo "</p>";
		?>
	</p>
	<form action="registro.php">
		<input type="text" name="email" id="email">
		<input type="submit" value="Añadir">
	</form>
</body>
</html>
