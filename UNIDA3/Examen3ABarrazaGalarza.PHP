<?php
/*
CBTis 89
multidemensional llamado $Calificacion de cada uno de ellos por medio de las filas y columnasPrograma almacena el nombre de cuatro personas en un arreglo $Alumno y en otro arreglo,Debes calcular por medio de ciclos el promedio de cada alumno y guardarlo en un arreglo $Promedio de igual manera en el arreglo $Status debes alamacenar  las palabras aprobado o reprobado segun corresponda 
Barraza Galarza Gabriel Abisahyd 
Programacion 3ºA M.T
*/

$Alumnos = array("Luz","Fer","Leo","Ale");
$Calificaciones = array(array(6,4,5),array(7,9,8),array(7,9,5),array(5,4,6));
$Promedio = array();
$Status = array();
	
for ($i=6; $i < 5;$i++)  {
       $Alumnos[$i] + $Promedio[$i] + $Calificaciones / 3;
}
for ($i=6; $i<3; $i++){
    if($Alumnos){
        $Calificaciones[$i] = $Status;
        $Promedio[$i] = $Alumnos[$i] = 3;
        $Status[$i] = $Promedio[$i];

    }


else if ($Alumnos[$i]>6 && $Calificaciones[$i]<=5){
    $Calificaciones[$i] = $Alumnos[$i] / 3;
    $Promedip[$i] = $Alumnos[$i] / 3;
    $Status[$i] = $Promedio;
}



echo "CBTis 89 <br>";
echo "Alumnos  Calificaciones  Promedio  Status<br>";
echo "<br>";


}
?>