<?php
function exibirDivisores($numero) {
    $divisores = [];
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            $divisores[] = $i;
        }
    }
    return $divisores;
}
?>