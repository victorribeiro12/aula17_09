<?php
function contarParesArray($array) {
    $contagem = 0;
    foreach ($array as $valor) {
        if ($valor % 2 == 0) $contagem++;
    }
    return $contagem;
}
?>