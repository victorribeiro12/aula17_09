<?php
declare(strict_types=1);

function somarDiagonalPrincipal(array $matriz): float {
    
    if (count($matriz) !== 3) {
        throw new InvalidArgumentException("A matriz deve ter exatamente 3 linhas.");
    }

    
    foreach ($matriz as $linha) {
        if (!is_array($linha) || count($linha) !== 3) {
            throw new InvalidArgumentException("Cada linha da matriz deve ser um array com 3 elementos.");
        }
    }

    
    $diagonalSum = 0.0;
    for ($i = 0; $i < 3; $i++) {
        if (!is_numeric($matriz[$i][$i])) {
            throw new InvalidArgumentException("Os elementos da diagonal devem ser números.");
        }
        $diagonalSum += $matriz[$i][$i];
    }

    return $diagonalSum;
}


$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

try {
    $resultado = somarDiagonalPrincipal($matriz);
    echo "Matriz:\n";
    foreach ($matriz as $linha) {
        echo implode(" ", $linha) . "\n";
    }
    echo "\nSoma da diagonal principal: $resultado\n";
} catch (InvalidArgumentException $e) {
    echo "Erro: " . $e->getMessage() . "\n";
}

?>