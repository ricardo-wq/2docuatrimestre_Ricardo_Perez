<?php
//2.- Haz un programa que guarde los gastos diarios de una semana en un arreglo indexado
// calcule el total de gastos utilizando un ciclo y muestre también el promedio semanal.

$gastos_semana = array(100, 200, 150, 300, 250, 180, 220);

$total_gastos = 0;
for ($i = 0; $i < count($gastos_semana); $i++) {
    $total_gastos += $gastos_semana[$i];
}

$promedio_semanal = $total_gastos / count($gastos_semana);

echo "<h2>Gastos Diarios de la Semana</h2>";
echo "Gastos diarios: ";
for ($i = 0; $i < count($gastos_semana); $i++) {
    echo "$" . $gastos_semana[$i] . " ";
}
echo "<br><br>";

echo "Total de gastos: <strong>$" . $total_gastos . "</strong><br>";
echo "Promedio semanal: <strong>$" . round($promedio_semanal, 2) . "</strong>";
?>
















?>