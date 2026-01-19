<?php
//5.- Haz un programa que almacene las ventas de diferentes productos en un arreglo asociativo
// muestre cada producto con la cantidad vendida y calcule el total de productos vendidos.

$ventas = array(
    "Producto A" => 10,
    "Producto B" => 15,
    "Producto C" => 8,
    "Producto D" => 20,
    "Producto E" => 12
);

$total = 0;
foreach ($ventas as $producto => $cantidad) {
    echo "Producto: $producto, Cantidad Vendida: $cantidad\n";
    $total += $cantidad;
}
echo "Total de productos vendidos: $total\n";
?>







