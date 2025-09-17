
<?php
$a = 10;
$b = 20;

echo "Antes:<br>";
echo "a = $a<br>";
echo "b = $b<br><br>";

// Método 1: Usando temporária
$temp = $a;
$a = $b;
$b = $temp;

echo "Depois (método 1):<br>";
echo "a = $a<br>";
echo "b = $b<br><br>";

// Voltando aos valores originais
$a = 10;
$b = 20;

// Método 2: Sem variável temporária
list($a, $b) = array($b, $a);

echo "Depois (método 2):<br>";
echo "a = $a<br>";
echo "b = $b";
?>  