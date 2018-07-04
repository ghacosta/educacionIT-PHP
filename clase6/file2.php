<?php
$nombre = 'PHP.txt';

$archivo = fopen($nombre, 'r') or die("no pude abrir el archivo");

echo filesize($nombre);