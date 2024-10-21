<?php
  /*CBTIS89
Programa que 
3ºA Programacion Matutino
*/
 
  $numeros = range(1,100);
  for ($i = 0;$i< count($numeros);$i++){
    if($numeros[$i]%2 ==0)
    {
      echo $numeros[$i]."<br>";
    }


  }
?>