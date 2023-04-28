<?php
/*
    Dados Fornecidos
	    $n= 7 | $arr = array(1, 2, 3, 7, 1, 8, 2)
    Resultado esperado
	    array(3, 7, 8, 1, 1, 2, 2)
*/

$n = 7;
$arr = array(1, 2, 3, 7, 1, 8, 2);

// contar a frequência de ocorrência de cada elemento
$freq = array_count_values($arr);

// função de comparação para ordenação
function cmp($a, $b) 
{
    global $freq;
    // comparar pela frequência de ocorrência
    $cmp = $freq[$b] - $freq[$a];
    // se as frequências forem iguais, comparar pelos valores
    if ($cmp == 0) {
        $cmp = $a - $b;
    }
    return $cmp;
}

// ordenar o array de acordo com as regras de ordenação desejadas
usort($arr, "cmp");

// exibir o resultado
print_r($arr);
