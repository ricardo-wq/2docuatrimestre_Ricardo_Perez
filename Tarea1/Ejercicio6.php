<?php
//6.- Haz un programa que guarde los precios de varios productos en un arreglo
//  y calcule el precio total sumando todos los valores.
$precios = array(100, 200, 150, 300, 250);
$total = 0;
foreach ($precios as $precio) {
    $total += $precio;
}
echo "Precio total: $total\n";
?>