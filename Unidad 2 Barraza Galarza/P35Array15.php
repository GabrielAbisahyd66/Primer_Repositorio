<?php
/*
CBTIS 89
ptograma que covierte los datos de un arreglo en una cadena de texto, y de forma contraria es decir convierte una cadena de texto a elementos dentro de un arreglo
Barrza Galarza Gabriel ABisahyd 
programacion 3ºA Matutino
*/

// Almacena datos en un arreglo 
$arraydatos =["Said","Navarro","Martinez"];

// Convierte un array en una cadena detexto
$string = implode(" ", $arraydatos);
echo "Cadena de texto <br>";
echo $string;
echo "<br>","<br>";

// Cadena de texto a separar
$cadena = "tercero de programacion matutino";

// Convierte una cadena de texto en array
$array = explode(" ", $cadena );

$longitud = count($array);
echo "<br>";
echo "Arreglo con datos de tipo string <br>";

//Imprime los elementos del arreglo
for ($i=0; $i<$longitud; $i++)
{ // Se obtiene el valor de cada elemnto
	echo $array [$i];
	echo "<br>";
}
?>