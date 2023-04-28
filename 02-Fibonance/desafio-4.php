<?php
/*
    Dados Fornecidos
 	    $n=1
    Resultado esperado
      	0
*/

$n = 1;

// inicializa o primeiro número da sequência
$fib = array(0);

// gera os próximos n-1 números da sequência
for ($i = 1; $i < $n; $i++) 
{
    $fib[$i] = $fib[$i-1] + ($i > 1 ? $fib[$i-2] : 0);
}

// exibe os números da sequência
echo implode(', ', $fib);
