<?php
/*CBTIS89
Programa que almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo for
Barraza Galarza Gabriel Abisahyd 
3ºA Programacion Matutino 
*/$arraynombres = array("Karina","Marco","Rocio","Roberto","Fer","Juan");

//Se Obtiene el numero de elementos 
$longitud = count($arraynombres);

//Recorre todos los elementos 
for($i=o; $i<$longitud; $i++)
	{  // Se obtiene el valor de cada elemento 
		echo $arraynombres[$i];
        echo "<br>";
}
?>