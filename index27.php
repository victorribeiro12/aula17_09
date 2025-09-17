<?php
function calcularFatorial($numero) {
    if ($numero < 0) return "Erro: Fatorial não definido para números negativos";
    if ($numero == 0 || $numero == 1) return 1;
    
    $resultado = 1;
    for ($i = 2; $i <= $numero; $i++) {
        $resultado *= $i;
    }
    return $resultado;
}

?>