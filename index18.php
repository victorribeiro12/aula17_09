<?php
function calculadora($num1, $num2, $operacao) {
    switch ($operacao) {
        case '+': return $num1 + $num2;
        case '-': return $num1 - $num2;
        case '*': return $num1 * $num2;
        case '/':
            if ($num2 != 0) return $num1 / $num2;
            return "Erro: Divisão por zero";
        default: return "Operação inválida";
    }
}
?>