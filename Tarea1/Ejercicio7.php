<?php
$empleados = array("Juan Perez", "Maria Gomez", "Carlos Sanchez", "Ana Torres", "Luis Ramirez");
$cantidad = count($empleados);

echo "EMPLEADOS REGISTRADOS<br>";
echo "=====================<br>";

for ($i = 0; $i < $cantidad; $i++) {
    echo ($i + 1) . ". " . $empleados[$i] . "<br>";
}

echo "=====================<br>";
echo "Total: " . $cantidad . " empleados";
?>