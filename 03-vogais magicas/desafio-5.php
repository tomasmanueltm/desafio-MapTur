<?php
/*
    Dados Fornecidos
        $s = iaaieeeoaueuaaaaieaooiiuiaueeoauiueuaeiaouiueoouaeeioeieoeeiiiouiaioiaeeaaaeaouiioiueuoieeoeoiuuuouiaoeaaeeeiueuiueiaieuoueoeooiuoooiooouuuoiuoeiuaouoeaaaiaeueaiaeouuaeioeoaeeuuaeouiauaiaoioueeiauuieouoeuoiiooauoeaoieuieiaooaaieuoauueoeueeauuaaueeeeeoooouueoiaauooioioaeiiuaiueeoaeiuiaouieiueuae
    Resultado esperado
        175
*/


// Converter a string para minúsculas
$s = strtolower($s);
// Inicializar contador
$count = 0;
// Percorrer a string verificando vogais duplicadas consecutivas
for ($i = 1; $i < strlen($s); $i++) {
    if (in_array($s[$i], array('a', 'e', 'i', 'o', 'u')) && $s[$i] == $s[$i-1]) {
        $count++;
    }
}
// Imprimir resultado
echo $count;
