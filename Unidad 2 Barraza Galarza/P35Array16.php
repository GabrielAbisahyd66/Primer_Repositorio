<?php
/*CBTIS89
Programa que 
Barraza Galarza Gabriel Abisahyd 
Programacion 3ºA Matutino
*/

$array1 = array(5,2,4,4,5);
$array2 = array(6,7,3,9,10);
$arraysuma = array($arraysuma = $array1 + $array2);
$arrayresta = array($arrayresta = $array1 - $array2);
$arraymulti = array($arraymulti = $array1 * $array2);
$arraydivi = array($arraydivi = $array1 / $array2);

$longitud = count($array1);

for($i=0; $i<$longitud; $i++)
{$arraysuma[$i] = $array1[$i]+$array2[$i];
    $arrayresta[$i] = $array1[$i]-$array2[$i];
    $arraymulti[$i] = $array1[$i]*$array2[$i];
    $arraydivi[$i] = $array1[$i]/$array2[$i];
}
 
 echo "Suma entre arreglos <br>";
 for ($i=0; $i<$longitud; $i++)
    {echo $array1[$i]."  +   ".$array2[$i]."  =  ".$arraysuma[$i];
echo "<br>";
}

 
 echo "resta entre arreglos <br>";
 for ($i=0; $i<$longitud; $i++)
    {echo $array1[$i]."  -   ".$array2[$i]."  =  ".$arrayresta[$i];
echo "<br>";
}


 
 echo "multi entre arreglos <br>";
 for ($i=0; $i<$longitud; $i++)
    {echo $array1[$i]."  *   ".$array2[$i]."  =  ".$arraymulti[$i];
echo "<br>";
}

 
 echo "dive entre arreglos <br>";
 for ($i=0; $i<$longitud; $i++)
    {echo $array1[$i]."  /   ".$array2[$i]."  =  ".$arraydivi[$i];
echo "<br>";
}


