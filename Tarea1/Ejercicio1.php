<?php
//1.- Haz un programa que almacene el total de ventas de un día en una variable y muestre un mensaje indicando 
// si fue un buen día de ventas cuando el monto sea mayor o igual a $5,000, o ventas bajas en caso contrario.
$ventas_dia = rand(3000, 7000);

echo "<h2>Simulación de Ventas Diarias</h2>";
echo "Ventas generadas aleatoriamente: <strong>$" . $ventas_dia . "</strong><br><br>";

if ($ventas_dia >= 5000) {
    echo "<div style='color: green; font-weight: bold;'>¡Fue un buen día de ventas!</div>";
} else {
    echo "<div style='color: red; font-weight: bold;'>Ventas bajas.</div>";
}

echo "<hr>";
echo "<p>Recarga la página (F5) para generar otro valor aleatorio y ver el resultado.</p>";
?>