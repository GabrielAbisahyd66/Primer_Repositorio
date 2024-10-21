<?php
/*CBTIS89
Programa que almacena diversosos datos en un arreglo y posteriormente los imprime por medio de un ciclo for
Barraza Flarza Gabriel Abisahyd
3ºA Programacion Matutino
*/
$nombre = "Gabriel";
$array = array(1,2,3, "Casa", $nombre);

//Se obtiene el numero de elementos 
$longitud = count($array);

//Recorre todos los elementos
for($i=0; $i<$longitud; $i++)
{ //Se obtiene el valor de cada elemento
	echo $array[$i];
	echo "<br>";
}
?>