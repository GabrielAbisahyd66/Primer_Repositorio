<?php
/*CBTIS89
Programa que almacena datos en un arreglo y posteriormente los imprime
Barraza Galarza Gavriel Abisahyd 
3ºA Programacion Matutino
*/
 
 $equipo = array("Portero"=>"Said","Defensa"=>"Daniel","Medio"=>"Gabriel","Delantero"=>"Angel","Portero");

 echo "** SELECION NACIONAL **","<br>","<br>";
 foreach ($equipo as $posicion=>$jugador)
 	{echo "El jugador" . $jugador . "es el " . $posicion;
echo "<br>","<br>";
}
?>