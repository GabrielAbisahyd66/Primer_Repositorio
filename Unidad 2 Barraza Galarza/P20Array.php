<?php
$nombre = "Gabriel";
$array = array(1,2,3, "casa", $nombre);
// se obtiene el numero de elementos 
$longuitud = count0($array);

// Recorre todos los elemntos 
for($i=0; $i<$longuitud; $i++)
	
{ //Se obtine el valor de cada elemnto 
	echo $array[$i];
	echo "<br>";
}
?>