<?php
/*
    Dados Fornecidos
        $n= 5 | $arr = array(3, 1, 2, 2, 4)
    Resultado esperado
        array(1, 3, 4, 2, 2)
*/

$n = 5;
$arr = array(3, 1, 2, 2, 4);

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
?>
