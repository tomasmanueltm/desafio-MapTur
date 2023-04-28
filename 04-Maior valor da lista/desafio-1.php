<?php
/*
    Dados Fornecidos: Matriz de 5 | Dados fornecidos: 3
    $a $b $v
    1 2 100
    2 5 100
    3 4 100
    Resultado esperado
    200
*/


// Inicializa o array com zeros
$n = 5;
$arr = array_fill(1, $n, 0);

// Lê o número de operações
$m = readline();

// Executa as operações
for ($i = 0; $i < $m; $i++) {
  // Lê os dados da operação
  list($a, $b, $v) = explode(' ', readline());

  // Atualiza os valores do array dentro do intervalo especificado
  for ($j = $a; $j <= $b; $j++) {
    $arr[$j] += $v;
  }
}

// Encontra o maior valor do array
$max = max($arr);

// Imprime o resultado
echo $max;
