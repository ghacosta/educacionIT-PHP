<?php
$user=$_GET["user"];
$pass=$_GET["pass"];

/*
mostrar mensaje "USUARIO NO REGISTRADO"
si el email es distinto de "admin@educationit.com"
*/


/*
mostrar mensaje "PASSWORD INCORRECTO"
si el pass es distinto de "jirafaVERDE"
*/

/*
mostrar mensje "LOGIN CORRECTO"
si el user y pass son los nombrados arriba
*/

if ($user == "admin@educationit.com" && $pass == "jirafaVERDE") {
	echo "<p>LOGIN CORRECTO</p>";
} else {
	if($user != "admin@educationit.com") {
		echo "<p>USUARIO NO REGISTRADO</p>";
	}

	if($pass <> "jirafaVERDE") {
		echo "<p>PASSWORD INCORRECTO</p>";
	}
}