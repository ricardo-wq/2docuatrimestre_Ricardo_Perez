<?php
//Haz un programa que declare un arreglo asociativo de productos con precios y calcule el total 
$arregloasociativo = ["Leche", "Cafe", "Platano", "Pan", "Galletas", "Cerillos"];
$precios = [20, 15, 10, 5, 25, 3];
$total = 0; 
foreach($precios as $precio){
    $total += $precio;
}
echo "El total de los productos es: $total";
?>