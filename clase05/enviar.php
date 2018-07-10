<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$mensaje = $_POST["mensaje"];
	if (empty($nombre) || strlen($nombre) < 3 || is_numeric($nombre) || is_numeric(substr($nombre, 0, 1))) {
		//nombre invalido
	} elseif (empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL)) {
		//email invalido
	} elseif (empty($mensaje) || strlen($mensaje) >= 400) {
		//mensaje invalido
	} else {
		//todas las variables validadas para crear el email
	}
} else {
	header("location: ./?page=contacto");
}