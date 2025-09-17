<?php
function somarElementosMatriz($matriz) {
    $soma = 0;
    foreach ($matriz as $linha) {
        $soma += array_sum($linha);
    }
    return $soma;
}
?>