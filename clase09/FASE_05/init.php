<?php
	define("DIR_RAIZ", "/clase09/FASE_05");

	define("FRONT_END_PATH", $_SERVER["DOCUMENT_ROOT"] . DIR_RAIZ);
	define("FRONT_END_URL", $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] . DIR_RAIZ);

	define("BACK_END_PATH", FRONT_END_PATH . "/admin");
	define("BACK_END_URL", FRONT_END_URL . "/admin");

?>