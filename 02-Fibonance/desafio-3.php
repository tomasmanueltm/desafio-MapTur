<?php
/*
    Dados Fornecidos
 	    $n= 8
    Resultado esperado
      	0, 1, 1, 2, 3,5,8,13
*/

$n = 8;

// inicializa os dois primeiros números da sequência
$fib = array(0, 1);

// gera os próximos n-2 números da sequência
for ($i = 2; $i < $n; $i++) 
{
    $fib[$i] = $fib[$i-1] + $fib[$i-2];
}

// exibe os números da sequência
echo implode(', ', $fib);

