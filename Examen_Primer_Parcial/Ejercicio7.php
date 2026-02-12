<?php
//Haz un programa que declare un arreglo asociativo de productos con precios y calcule el total 
$Materias = ["Matematicas", "Español", "Ciencias", "Artes", "Química",];
$Calificaciones = [10, 9, 10, 7, 8];
$total = 0; 
foreach($Calificaciones as $calificacion){
    $total += $calificacion;
}
$promedio = $total / count($Calificaciones);
echo "El promedio de las calificaciones es: $promedio";

?>