<!DOCTYPE html>
<html>
<head>
	<title>Calculo de Média</title>
</head>
<body>
	<h1>Calculo de Média</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="nota1">Nota 1:</label>
		<input type="number" name="nota1" required><br><br>
		<label for="nota2">Nota 2:</label>
		<input type="number" name="nota2" required><br><br>
		<input type="submit" value="Calcular Média">
	</form>
	<br>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$nota1 = $_POST["nota1"];
		$nota2 = $_POST["nota2"];
		$media = ($nota1 + $nota2) / 2;
		if ($media == 10) {
			echo "Aprovado com Distinção";
		} elseif ($media >= 7) {
			echo "Aprovado";
		} else {
			echo "Reprovado";
		}
	}
	?>
</body>
</html>
