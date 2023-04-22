<!DOCTYPE html>
<html>
<head>
	<title>Comprar Produto</title>
</head>
<body>
	<h1>Comprar Produto</h1>
	<form method="post">
		<p>Preço do produto 1: <input type="number" name="preco1" required></p>
		<p>Preço do produto 2: <input type="number" name="preco2" required></p>
		<p>Preço do produto 3: <input type="number" name="preco3" required></p>
		<button type="submit">Calcular</button>
	</form>
	<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$preco1 = $_POST['preco1'];
			$preco2 = $_POST['preco2'];
			$preco3 = $_POST['preco3'];

			if ($preco1 < $preco2 && $preco1 < $preco3) {
				echo "<p>O produto 1 é o mais barato.</p>";
			} elseif ($preco2 < $preco1 && $preco2 < $preco3) {
				echo "<p>O produto 2 é o mais barato.</p>";
			} elseif ($preco3 < $preco1 && $preco3 < $preco2) {
				echo "<p>O produto 3 é o mais barato.</p>";
			} else {
				echo "<p>Os preços são iguais.</p>";
			}
		}
	?>
</body>
</html>
