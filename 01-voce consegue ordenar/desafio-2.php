<?php
/*
    Dados Fornecidos
        $n= 10 | $arr = array(8, 5, 5, 5, 5, 1, 1, 1, 4, 4)
    Resultado esperado
        array(8, 4, 4, 1, 1, 1, 5, 5, 5, 5)
*/

$n = 10;
$arr = array(8, 5, 5, 5, 5, 1, 1, 1, 4, 4);

// contar a frequência de ocorrência de cada elemento
$freq = array_count_values($arr);

// função de comparação para ordenação
function cmp($a, $b) {
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
