<html>
<head>
	<title><?php echo "Clase 1" ?></title>
	<meta charset="UTF-8">
</head>
<body>
	<h1>Factura</h1>

	<form method="get" name="factura" action="index.php" >
		<label>Producto 1</label>
		<input name="prod1" type="number">
		<label>Producto 2</label>
		<input name="prod2" type="number">
		<button type="submit">Calcular</button>
	</form>
	<?php
		$IVA = 1.21;
		if(isset($_GET["prod1"]) && isset($_GET["prod2"])) {
			$prod1=$_GET["prod1"];
			$prod2=$_GET["prod2"];
			$suma= $prod1 + $prod2;
			$sumaIVA= $suma * $IVA;

			echo "<ul>";
			echo "<li>Producto 1: $prod1</li>";
			echo "<li>Producto 2: $prod2</li>";
			echo "<li>Suma: $suma</li>";
			echo "<li>Suma con IVA: $sumaIVA</li>";
			echo "</ul>";
		}
	?>
</body>
</html>