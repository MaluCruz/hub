<!DOCTYPE html>
<html>
<head>
	<title>Verificar se um número é positivo ou negativo</title>
</head>
<body>
	<form method="post" action="">
		<label for="num">Digite um número:</label>
		<input type="number" id="num" name="num"><br>

		<input type="submit" value="Enviar">
	</form>

	<?php
	if (isset($_POST['num'])) {
		$num = $_POST['num'];

		if ($num > 0) {
			echo "<p>O número é positivo</p>";
		} elseif ($num < 0) {
			echo "<p>O número é negativo</p>";
		} else {
			echo "<p>O número é zero</p>";
		}
	}
	?>
</body>
</html>
