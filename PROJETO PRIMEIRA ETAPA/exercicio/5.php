<!DOCTYPE html>
<html>
<head>
	<title>Menor número</title>
</head>
<body>
	<form method="post">
		<label>Digite o primeiro número:</label>
		<input type="number" name="num1">
		<br>
		<label>Digite o segundo número:</label>
		<input type="number" name="num2">
		<br>
		<input type="submit" value="Verificar">
	</form>

	<?php
		if(isset($_POST['num1']) && isset($_POST['num2'])){
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];

			if($num1 < $num2){
				echo "O menor número é: " . $num1;
			} else {
				echo "O menor número é: " . $num2;
			}
		}
	?>
</body>
</html>
