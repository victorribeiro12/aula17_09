<?php

function verificaParImpar($numero) {
    if ($numero % 2 == 0) {
        return "par";
    } else {
        return "ímpar";
    }
}

$num = 15;
echo "O número $num é " . verificaParImpar($num) . ".\n";
?>
