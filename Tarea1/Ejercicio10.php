<?php

//10.- Haz un programa que almacene el total de ventas de varios vendedores y
//  determine cuál obtuvo la mayor venta

$ventas = array(1000, 2500, 1800, 3200, 2100);
$mayor_venta = $ventas[0];
$vendedor = 1;

for ($i = 1; $i < count($ventas); $i++) {
    if ($ventas[$i] > $mayor_venta) {
        $mayor_venta = $ventas[$i];
        $vendedor = $i + 1;
    }
}

echo "El vendedor " . $vendedor . " obtuvo la mayor venta con un total de $" . $mayor_venta . "\n";







?>