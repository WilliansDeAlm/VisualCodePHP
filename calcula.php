<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];


function calcula ($num1,$num2)
{
    $soma = $num1 + $num2;
    $sub = $num1 - $num2;
    $mult = $num1 * $num2;
    $div = $num1 / $num2;

    if ($num2 != 0) 
    {
        return("A soma dos números $num1 + $num2 é $soma.\n A subtração de $num1 + $num2 é $sub.\n A multiplicação dos números $num1 x $num2 é $mult.\n A divisão dos números $num1 por $num2 é $div.");
    }
    else
    {
        return("A soma dos números $num1 + $num2 é $soma.\n A subtração de $num1 + $num2 é $sub.\n A multiplicação dos números $num1 x $num2 é $mult.\n A divisão não pode ser realizada por numero ZERO.");
    }
}

$resultado = calcula ($num1,$num2);

echo nl2br ($resultado);