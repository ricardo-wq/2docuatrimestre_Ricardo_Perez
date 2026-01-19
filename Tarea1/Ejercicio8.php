<?php
//8.- Haz un programa que almacene varios números en un arreglo y
// muestre únicamente los números mayores a 50 utilizando un ciclo y una condición.

$numeros = array(25, 78, 45, 90, 30, 60, 85, 15);
$cantidad = count($numeros);

echo "NÚMEROS MAYORES A 50<br>";
echo "=====================<br>";

for ($i = 0; $i < $cantidad; $i++) {
    if ($numeros[$i] > 50) {
        echo $numeros[$i] . "<br>";
    }
}
?>
