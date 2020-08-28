<?php

$num = $_GET['num'];

function ParOuImpar ($num)
{
    if ($num % 2 == 0) 
    {
        return("O número $num é PAR.");
    }
    else 
    {
        return ("O número $num é IMPAR.");
    }
}

$resultado = ParOuImpar ($num);

echo " $resultado ";