<?php
//8.- Haz un programa que almacene varios números en un arreglo y muestre únicamente los números mayores a 50 utilizando un ciclo y una condición.
$numeros = array(10, 55, 23, 67, 89, 45, 12, 90, 34, 76);
for ($i = 0; $i < count($numeros); $i++) {
    if ($numeros[$i] > 50) {
        echo $numeros[$i] . "\n";
    }
}

?>