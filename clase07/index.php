<?php

$hostname = 'localhost';
$dbname   = 'comercioit';
$username = 'root';
$password = 'Admin2015';
try {
	$conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
	$sql = 'SELECT Nombre, Precio, Stock FROM Productos';

	$conn->prepare($sql);

	foreach ($conn->query($sql) as $valor) {
		echo $valor['Nombre'];
	}

} catch (PDOException $e) {
	echo $e->getMessage();
}