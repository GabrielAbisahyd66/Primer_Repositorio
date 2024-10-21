<?php
/*CBTIS89
Programa cheque
Barraza Galarza Gabriel Abisayd 
Programacion 3ºA Matutino
*/
 
 $cheque=5768;

$BM= floor($cheque/1000);
$cheque= $cheque%1000;
$BQ= floor($cheque/500);
$cheque= $cheque%500;
$BD= floor($cheque/200);
$cheque= $cheque%200;
$BC= floor($cheque/100);
$cheque= $cheque%100;
$BS= floor($cheque/50);
$cheque= $cheque%50;
$BB= floor($cheque/20);
$cheque= $cheque%20;
$MD= floor($cheque/10);
$cheque= $cheque/10;
$MC= floor($cheque/5);
$cheque= $cheque/5;
$MDO= floor($cheque/2);
$cheque= $cheque/2;
$MP= floor($cheque/1);
$cheque= $cheque/1;

echo "Los billetes de mil son",$BM;
echo "<br>";
echo "Los billetes de mil son",$BQ;
echo "<br>";
echo "Los billetes de mil son",$BD;
echo "<br>"
echo "Los billetes de mil son",$BC;
echo "<br>"
echo "Los billetes de mil son",$BS;
echo "<br>"
echo "Los billetes de mil son",$BB;
echo "<br>"
echo "Los billetes de mil son",$MD;
echo "<br>"
echo "Los billetes de mil son",$MC;
echo "<br>"
echo "Los billetes de mil son",$MDO;
echo "<br>"
echo "Los billetes de mil son",$MP;
echo "<br>"