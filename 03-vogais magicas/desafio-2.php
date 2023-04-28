<?php
/*
    Dados Fornecidos
        $s = aeiaaioooaa
    Resultado esperado
        0
*/

$s = "aeiaaioooaa";
$vogais = "aeiou";
$ordem = str_split($vogais);

$maior_subseq = 0;
$subseq_atual = 0;

for ($i = 0; $i < strlen($s); $i++) {
    if ($s[$i] == $ordem[$subseq_atual]) {
        $subseq_atual++;
        if ($subseq_atual == 5) {
            $maior_subseq = 5;
            break;
        }
    }
}
echo $maior_subseq;
