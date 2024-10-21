<?php 
/*CBTIS89
Programa que almacena datos en un arreglo y posteriormente los imprime
Barraza Galarza Gavriel Abisahyd 
3ºA Programacion Matutino
*/
 
 $fruta = array("Manzana"=>"25$","Mango"=>"40$","Pera"=>" 25$","Limon","35$"=>"Naranja","20$");

 echo "** FRUTERIA CASANDRA **","<br>","<br>";
 foreach ($fruta as $precio=>$kg)
 	{echo "El kilo cueta " . $kg . "Por kg de " . $precio;
echo "<br>","<br>";
}
?>


