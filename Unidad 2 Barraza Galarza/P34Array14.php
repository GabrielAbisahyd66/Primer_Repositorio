<?php
/*CBTIS89
Programa que 
Barraza Galarza Gabriel Abisahyd 
Programacion 3ºA Matutino
*/

 $nombre=array("juan","pepe","angel","Said","Luis","Mario");
 array($nombre);
 echo "arreglo original <br>";
 for ($i = 0; $i< count($nombre); $i++){
 	echo $nombre[$i] . "<br>";
 }
 array_push ($nombre, "Manuel","Matias","Gerardo","Leornado");
 array_splice($nombre,1,2);

 rsort($nombre);
 echo "Arreglo ordenado de manera descedente";
 for  ($i = 0; $i< count($nombre); $i++){
 	echo $nombre[$i] . "<br>";
 }
 echo "el numero de elementos son " . count($nombre);
 ?>
