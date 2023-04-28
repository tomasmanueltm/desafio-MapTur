<?php
/*
    Dados Fornecidos
 	    $n= 5
    Resultado esperado
      	0, 1, 1, 2, 3
*/

$n = 4;

// inicializa os três primeiros números da sequência
$fib = array(0, 1, 1);

// gera os próximos n-3 números da sequência
for ($i = 3; $i < $n; $i++) 
{
    $fib[$i] = $fib[$i-1] + $fib[$i-2];
}

// ordena o array em ordem crescente
sort($fib);

// exibe os números da sequência
echo implode(', ', $fib);

