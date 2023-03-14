<?php

$p=400000;
$n=3;
$r=5;

$ci=$p*(pow((1+$r/100),$n));

echo "compound interest after three years is :".$ci;
?>