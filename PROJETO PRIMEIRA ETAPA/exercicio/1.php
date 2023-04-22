<!DOCTYPE html>
<html>
<head>
	<title>Encontrar o maior número</title>
</head>
<body>
	<form method="post" action="">
		<label for="num1">Digite o primeiro número:</label>
		<input type="number" id="num1" name="num1"><br>

		<label for="num2">Digite o segundo número:</label>
		<input type="number" id="num2" name="num2"><br>

		<input type="submit" value="Enviar">
	</form>

	<?php
	if (isset($_POST['num1']) && isset($_POST['num2'])) {
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];

		if ($num1 > $num2) {
			echo "<p>O maior número é: $num1</p>";
		} elseif ($num2 > $num1) {
			echo "<p>O maior número é: $num2</p>";
		} else {
			echo "<p>Os números são iguais</p>";
		}
	}
	?>
</body>
</html>
