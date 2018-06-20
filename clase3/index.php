<?php
/*
$array1 = array(10, 15, 25);

$array1 = array(0 => 10, 1 => 15, 5 => 25);

for ($i=0; $i < count($array1) ; $i++) { 
	echo $array1[$i]."<br>";
}

foreach ($array1 as $value) {
	echo $value."<br>";
}

$registro1 = array("dni" => 36014573, "nombre" => "Guillermo", "estaCasado" => false);
$registro2 = array("dni" => 35423133, "nombre" => "Josefina", "estaCasado" => true);

$resultados = array($registro1, $registro2);

$primeraIteracion = true;

echo "<table border='1'>";
foreach ($resultados as $fila) {
	if ($primeraIteracion == true) {
		echo "<tr>";
		foreach ($registro1 as $nombreColumna => $valor) {
			echo "<th>$nombreColumna</th>";
		}
		echo "</tr>";
		$primeraIteracion = false;
	}
	echo "<tr>";
	foreach ($fila as $valor) {
		echo "<td>$valor</td>";
	}
	echo "</tr>";
}
echo "</table>";

*/


function printBonito($array) {
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}

echo "<h1>SORT</h1>";
$frutas = array("limón", "naranja", "banana", "albaricoque");
printBonito($frutas);
sort($frutas);
printBonito($frutas);

echo "<h1>ASORT</h1>";
$frutas = array("limón", "naranja", "banana", "albaricoque");
printBonito($frutas);
asort($frutas);
printBonito($frutas);

echo "<h1>RSORT</h1>";
$frutas = array("limón", "naranja", "banana", "albaricoque");
printBonito($frutas);
rsort($frutas);
printBonito($frutas);

echo "<h1>ARSORT</h1>";
$frutas = array("limón", "naranja", "banana", "albaricoque");
printBonito($frutas);
arsort($frutas);
printBonito($frutas);


echo "<h1>KSORT</h1>";
$registros = array("dni" => 35423133, "nombre" => "Josefina", "estaCasado" => true);
printBonito($registros);
ksort($registros);
printBonito($registros);

echo "<h1>KRSORT</h1>";
$registros = array("dni" => 35423133, "nombre" => "Josefina", "estaCasado" => true);
printBonito($registros);
krsort($registros);
printBonito($registros);