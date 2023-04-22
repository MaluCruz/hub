<!DOCTYPE html>
<html>
<head>
	<title>Verificar sexo</title>
</head>
<body>
	<form method="post" action="">
		<label for="sexo">Digite F ou M:</label>
		<input type="text" id="sexo" name="sexo"><br>

		<input type="submit" value="Enviar">
	</form>

	<?php
	if (isset($_POST['sexo'])) {
		$sexo = strtoupper($_POST['sexo']);

		if ($sexo == "F") {
			echo "<p>F - Feminino</p>";
		} elseif ($sexo == "M") {
			echo "<p>M - Masculino</p>";
		} else {
			echo "<p>Sexo Inválido</p>";
		}
	}
	?>
</body>
</html>
