<?php
$salario=240;
$comissão=20;
$carrosvendidos=30;
$dinheiro=$salario+$comissão*$carrosvendidos;
$dinheiro= $dinheiro+$dinheiro*5/100;

echo $dinheiro;
?>