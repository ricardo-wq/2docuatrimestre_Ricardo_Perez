<?php
// Haz un programa que declare un arreglo asociativo de alumnos, donde cada alumno tenga varias calificaciones, y calcule el promedio de cada uno.
$alumnos = array(
    "Juan" => array(85, 90, 78),
    "María" => array(92, 88, 95),
    "Pedro" => array(70, 75, 80)
);
foreach ($alumnos as $alumno => $calificaciones) {
    $promedio = array_sum($calificaciones) / count($calificaciones);
    echo "El promedio de " . $alumno . " es: " . round($promedio, 2) . "\n";
}
?>