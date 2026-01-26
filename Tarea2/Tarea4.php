<?php
//Haz un programa que declare una cadena y muestre cuántas veces aparece cada letra.
$cadena = "Hola,Mundo.";
$frecuencia_letras = array();
$cadena_sin_espacios = str_replace(" ", "", strtolower($cadena));

for ($i = 0; $i < strlen($cadena_sin_espacios); $i++) {
    $letra = $cadena_sin_espacios[$i];
    if (ctype_alpha($letra)) {
        if (isset($frecuencia_letras[$letra])) {
            $frecuencia_letras[$letra]++;
        } else {
            $frecuencia_letras[$letra] = 1;
        }
    }
}
foreach ($frecuencia_letras as $letra => $frecuencia) {
    echo "La letra '" . $letra . "' aparece " . $frecuencia . " veces.<br>";
}
?>