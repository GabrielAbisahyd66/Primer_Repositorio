<?php
/*CBTIS89
Programa que almacena datos en un arreglo y posteriormente los imprime
Barraza Galarza Gavriel Abisahyd 
3ºA Programacion Matutino
*/

$equipo = array("Programacion"=>"Said","ARH"=>"Daniel","Arquitectura"=>"Gabriel","Mecatronica"=>"Angel");

 echo "** CBTIS89 **","<br>","<br>";
 foreach ($equipo as $posicion=>$jugador)
 	{echo "El Alumno" . $jugador . "ESta en la 89 y estudia" . $posicion;
echo "<br>","<br>";
}
?>