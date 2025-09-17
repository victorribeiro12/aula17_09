<?php
function somarParesAte100() {
    $soma = 0;
    for ($i = 2; $i <= 100; $i += 2) {
        $soma += $i;
    }
    return $soma;
}

?>