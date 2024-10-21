<?php
/*CBTIS89
Programa que 
Barraza Galarza Gabriel Abisahyd 
Programacion 3ºA Matutino
*/

$nombre= array("nombre1"=>"juan","nombre2"=>"Said","nombre3"=>"Casandra","nombre4"=>"Angel","nombre5"=>"Daniel","nombre6"=>"Toño","nombre7"=>"Anthony","nombre8"=>"Oscar");
foreach($nombre as $posicion=>$jugador){
	echo "El jugador" . $jugador . "esta en el array";
	echo "<br>";
}
?>