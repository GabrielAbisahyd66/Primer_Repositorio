<?php
/*
CBTis89
Programa de Array positivos y negativos
Barraza Galarza Gabriel Abisahyd
Programación 3ºA M.T
*/

$Arraynumeros = array(-6, 8, -15, 2, -7, 8, -24, 3, -15, 9, -66, 18, -3, 4);
$Arraypositivos = array();  
$Arraynegativos = array();
$sumapositivos = 0;
$sumanegativos = 0;


foreach ($Arraynumeros as $numero) {
    if ($numero >= 0) {
     
        $Arraypositivos[] = $numero;
     
        $sumapositivos += $numero;
    } else {
     
        $Arraynegativos[] = $numero;
  
        $sumanegativos += $numero;
    }
}


echo "Números positivos: ";
echo implode(", ", $Arraypositivos) . "<br>";

echo "Números negativos: ";
echo implode(", ", $Arraynegativos) . "<br>"; 


echo "La suma de los números positivos es: " . $sumapositivos . "<br>";
echo "La suma de los números negativos es: " . $sumanegativos . "<br>";

?>
