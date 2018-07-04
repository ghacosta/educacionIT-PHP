<?php

$nombre = "PHP.txt"; //Mi pais es Argentina

$archivo = fopen($nombre, 'a');

$nuevaLinea = "\r\nEsta deberia ser una nueva linea";
fwrite($archivo, $nuevaLinea); //Mi pais es ArgentinaEsta deberia ser una nueva linea