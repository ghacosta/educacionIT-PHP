<?php
$pizza  = "porción1 porción2 porción3 porción4 porción5 porción6";
$porciones = explode(" ", $pizza);

print_r($porciones);

// a partir de un archivo (de 4 lineas y 5 palabras por linea) 
// leer cada linea del archivo y mostrar por pantalla
// aquellas palabras que tengan mas de 6 caracteres 
// a esas palabras mostrarlas en mayusculas.