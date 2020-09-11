<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

function calcula ($num1,$num2)
{
    $soma = $num1 + $num2;
    $sub = $num1 - $num2;
    $mult = $num1 * $num2;
    $div = $num1 / $num2;

    if ($num2 != 0) 
    {
        return("A soma dos números $num1 + $num2 é $soma.
        <br>
        A subtração de $num1 - $num2 é $sub.
        <br>
        A multiplicação dos números $num1 x $num2 é $mult.
        <br>
        A divisão dos números $num1 por $num2 é $div.");
    }
    else
    {
        return("A soma dos números $num1 + $num2 é $soma.
        <br>
        A subtração de $num1 - $num2 é $sub.
        <br>
        A multiplicação dos números $num1 x $num2 é $mult.
        <br>
        A divisão não pode ser realizada por numero ZERO.");
    }
}

$resultado = calcula ($num1,$num2);

echo ($resultado);
