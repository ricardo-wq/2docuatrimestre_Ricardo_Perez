<?php
//Haz un programa que declare un arreglo asociativo con producto y cantidad y muestre los que están bajos (<5).
$productos = array(
    "Manzanas" => 10,
    "Naranjas" => 3,
    "Plátanos" => 7,
    "Peras" => 2,
    "Uvas" => 15
);
echo "Productos con cantidad baja (<5):\n";
foreach ($productos as $producto => $cantidad) {
    if ($cantidad < 5) {
        echo "- " . $producto . ": " . $cantidad . "\n";
    }
}








?>