<?php
/*
    Dados Fornecidos
        $s = iaaieeeoaueuaaaaieaooiiuiaueeoauiueuaeiaouiueoouaeeioeieoeeiiiouiaioiaeeaaaeaouiioiueuoieeoeoiuuuouiaoea aeeeiueuiueiaieuoueoeooiuoooiooouuuoiuoeiuaouoeaaaiaeueaiaeouuaeioeoaeeuuaeouiauaiaoioueeiauuieouoe uoiiooauoeaoieuieiaooaaieuoauueoeueeauuaaueeeeeoooouueoiaauooioioaeiiuaiueeoaeiuiaouieiueuae Resultado esperado
    Resultado esperado
        67
*/
function magicSequenceLength($s) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $vowelIndex = array_fill(0, 5, 0); // inicializa todos os índices de vogais como 0
    $maxMagicLength = 0;
    
    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];
        
        // se o caractere atual é uma vogal na ordem correta, avança o índice dessa vogal
        if ($char === $vowels[$vowelIndex[0]]) {
            $vowelIndex[0]++;
            
            // se chegamos ao final da sequência de vogais, temos uma subsequência mágica
            if ($vowelIndex[0] === 5) {
                $magicLength = $i + 1; // comprimento da subsequência mágica
                $maxMagicLength = max($maxMagicLength, $magicLength);
                $vowelIndex = array_fill(0, 5, 0); // reseta os índices das vogais
            }
        }
        
        // se o caractere atual não é uma vogal na ordem correta, avança o índice de todas as vogais
        for ($j = 0; $j < 5; $j++) {
            if ($char === $vowels[$j] && $vowelIndex[$j] === 0) {
                // encontrou uma vogal fora de ordem, não pode haver subsequência mágica aqui
                $vowelIndex = array_fill(0, 5, 0); // reseta os índices das vogais
                break;
            }
            $vowelIndex[$j] = max(0, $vowelIndex[$j] - 1);
        }
    }
    return $maxMagicLength;
}
magicSequenceLength("uioieeeaouiiuaeeuuiuuauuauaeaeuauaeaaiuoiouaeuiuuoooaeeaioeieoeooaeuooae")
