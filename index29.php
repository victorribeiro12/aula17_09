<?php
function contarPares1a100() {
    $contagem = 0;
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 == 0) $contagem++;
    }
    return $contagem;
}
?>