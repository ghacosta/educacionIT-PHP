<?php
//fopen — Abre un fichero o un URL
// fopen (string $filename, string $mode)
//devuelve un handle, un puntero al archivo PHP.txt

$nombre = 'PHP.txt';
$archivo = @fopen($nombre, 'w') or exit("unable to open file ($nombre)");

$texto = 'Mi pais es Argentina';
fwrite($archivo, $texto);


$nombre = 'PHP.txt';
$archivo = @fopen($nombre, 'r') or exit("unable to open file ($nombre)");

$indice = 0;
while (!feof($archivo)) {
  $caracter = fgetc($archivo);
  if ($indice % 2 == 0)
    echo $caracter;
  else 
    echo "_";
  $contador++;
}