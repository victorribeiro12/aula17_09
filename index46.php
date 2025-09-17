<?php
function contarVogais($texto) {
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $texto = strtolower($texto);
    $contagem = 0;
    
    for ($i = 0; $i < strlen($texto); $i++) {
        if (in_array($texto[$i], $vogais)) $contagem++;
    }
    
    return $contagem;
}
?>