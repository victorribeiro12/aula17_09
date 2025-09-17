<?php

function areaTriangulo($base, $altura) {
    return ($base * $altura) / 2;
}

$base = 10;
$altura = 5;
echo "A área do triângulo é: " . areaTriangulo($base, $altura) . "\n";
?>
