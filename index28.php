<?php
function gerarFibonacci($n) {
    $sequencia = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $sequencia[$i] = $sequencia[$i-1] + $sequencia[$i-2];
    }
    return $sequencia;
}
?>