<?php

//3.- Haz un programa que guarde los gastos diarios de una semana en un arreglo indexado
//  calcule el total de gastos utilizando un ciclo y muestre también el promedio semanal.

$gastos = array(100, 150, 200, 180, 220, 160, 190);
$total = 0;
for ($i = 0; $i < count($gastos); $i++) {
    $total += $gastos[$i];
}
$promedio = $total / count($gastos);
echo "Total de gastos: " . $total . "\n";
echo "Promedio semanal: " . $promedio . "\n";








?>