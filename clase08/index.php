<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="main.js"></script>
</head>
<body>
  
<?php

$hostname = 'localhost';
$dbname   = 'comercioit';
$username = 'root';
$password = 'Admin2015';
try {
	$conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
	$sql = 'SELECT * FROM productos';

	$conn->prepare($sql);

  echo "<table class='table'>";
  echo "<tr>";
  echo "<th>id</th>";
  echo "<th>Nombre</th>";
  echo "<th>Precio</th>";
  echo "<th>Stock</th>";
  echo "</tr>";
	foreach ($conn->query($sql) as $valor) {
    echo "<tr>";
    echo "<td>".$valor['idProducto']."</td>";
    echo "<td>".$valor['Nombre']."</td>";
    echo "<td>".$valor['Precio']."</td>";
    echo "<td>".$valor['Stock']."</td>";
    echo "</tr>";
  }
  echo"</table>";

} catch (PDOException $e) {
	echo $e->getMessage();
}

?>
</body>
</html>