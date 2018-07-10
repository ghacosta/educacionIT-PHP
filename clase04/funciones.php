<?php

function calcularPorcentaje($valor, $total) {
	$porcentaje=round(($valor/$total)*100);
	return $porcentaje.'%';
}


$valor1=10;
$totalPuntos=225;

$porcentajeDePuntos=calcularPorcentaje(15, 325);

$otroPorcentaje=calcularPorcentaje($valor1, $totalPuntos);


?>