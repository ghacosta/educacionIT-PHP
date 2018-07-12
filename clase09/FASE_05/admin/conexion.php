<?php
	$host = "localhost";
	$user = "root";
	$pass = "Admin2015";
	$db = "comercioit";
	
	$conexion = new PDO("mysql:host=" . $host . ";dbname=" . $db, $user, $pass);
	$conexion->exec("SET CHARACTER SET utf8");
?>