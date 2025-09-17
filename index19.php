<?php
function verificarLetra($letra) {
    $letra = strtolower($letra);
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    return in_array($letra, $vogais) ? "Vogal" : "Consoante";
}
?>