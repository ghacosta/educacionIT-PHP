<?php
$nombre = "PHP.txt";

$archivo = fopen($nombre, "r");

while (!feof($archivo)) {
  echo fgets($archivo)."<br>";
}