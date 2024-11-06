<?php
/*
CBTis89
Programa que almacena datos en un arreglo multidimesnsional y posteriormente los imprime en diferentes posiciones
Barraza Galarza Gabriel Abisahyd
3ºA Progranacion M.T
*/
$datos = array(array(10, 20, 30),array(40, 50, 60),array(70, 80, 90));

echo "NORML";
echo "<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $datos[$i][$j] . " ";
    }			
    echo "<br>";
}

echo "FILAS A COLUMNAS";
echo "<br>";

for ($j = 0; $j < 3; $j++) {
    for ($i = 2; $i >= 0; $i--) {
        echo $datos[$i][$j] . " ";
    }
    echo "<br>";
}
echo "<br>FILAS INVERSAS";
echo "<br>";
for ($i = 2; $i >= 0; $i--) {
    for ($j = 0; $j < 3; $j++) {
        echo $datos[$i][$j] . " ";
    }
    echo "<br>";
}
echo "<br>COLUMNAS INVERSAS";
echo "<br>";
for ($j = 2; $j >= 0; $j--) {
    for ($i = 0; $i < 3; $i++) {
        echo $datos[$i][$j] . " ";
    }
    echo "<br>";
}


?>