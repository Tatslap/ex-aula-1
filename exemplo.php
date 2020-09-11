<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$soma = $num1 + $num2;
$sub = $num1 - $num2;
$mult = $num1 * $num2;
$div = $num1 / $num2;

echo "Resultado da soma é :  $soma <br>";
echo "Resultado da Subtração é:  $sub <br>";
echo "Resultado da  Multiplicação é:  $mult <br>";
echo "Resultado da Divisão é:  $div <br>";
