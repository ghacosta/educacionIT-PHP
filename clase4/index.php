<?php
$pagina = $_GET["page"];

if (!isset($_GET["page"])) {
	require 'inicio.php';
} else {
	if (file_exists($pagina.'.php')) {
		require $pagina.'.php';
	} else {
		require 'inicio.php';
	}
}

?>