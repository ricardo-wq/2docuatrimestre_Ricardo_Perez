<?php
// Haz un programa que declare una cadena y cuente cuántas vocales tiene.
$cadena = "Hola Mundo prueba de vocales";
$vocales = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
$contador = 0;
foreach (str_split($cadena) as $letra) {
    if (in_array($letra, $vocales)) {
        $contador++;
    }
}
echo "La cadena es: " . $cadena . "\n";
echo "La cadena tiene " . $contador . " vocales.";





?>