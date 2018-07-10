<?php

//empty, ltrim, rtrim, trim, substr, strlen, str_replace, strtoupper, strtolower, number_format

//localhost/clase5/index.php?palabra=cualquier&index=2&cantidad=1

function validarParametros($parametros) {
	$puedoUsar=true;
	foreach ($parametros as $nombre) {
		$puedoUsar=isset($_GET[$nombre]) && !empty($_GET[$nombre]);
		if($puedoUsar == false) {
			return false;
		}
	}
	return $puedoUsar;
}


$parametros=["palabra", "index", "cantidad"];

if(validarParametros($parametros)) {
	if($_GET["index"] < strlen($_GET["palabra"])) {
		$indice = $_GET["index"];
	} else {
		$indice = round($_GET["index"]/2);
	}
} else {
	echo "alguna variable no fue correctamente seteada";
}