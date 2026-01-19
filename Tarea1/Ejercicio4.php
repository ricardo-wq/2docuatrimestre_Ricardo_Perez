<?php
//4.- Haz un programa que guarde una lista de al menos cinco clientes en un arreglo indexado 
// y muestre el nombre de cada cliente utilizando un ciclo.

$clientes = array("Juan", "María", "Pedro", "Ana", "Carlos");
for ($i = 0; $i < count($clientes); $i++) {
    echo "Cliente: " . $clientes[$i] . "\n";
}
?>