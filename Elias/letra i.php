<?php

$n_intermediária=7;
$n_trabalho=8;
$n_final=9;

$peso_intermediario=0.3;
$peso_trabalho=0.2;
$peso_final=0.5;

$nota_final_calculada=($n_intermediária*$peso_intermediario)+($n_trabalho*$peso_trabalho)+($n_final*$peso_final);

echo "A nota final foi = " . $nota_final_calculada;

?>