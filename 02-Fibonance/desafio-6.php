<?php
/*
    Dados Fornecidos
 	    $n=10
    Resultado esperado
      	0, 1, 1, 2, 3, 5, 8, 13, 21, 34
*/

$n = 10;

// inicializa os dois primeiros números da sequência
$fib = array(0, 1);

// gera os próximos n-2 números da sequência
for ($i = 2; $i < $n; $i++) 
{
    $fib[$i] = $fib[$i-1] + $fib[$i-2];
}

// exibe os números da sequência
echo implode(', ', $fib);

