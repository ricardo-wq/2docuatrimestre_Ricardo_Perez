<?php
//Haz un programa que verifique si una palabra o frase es un palíndromo

function esPalindromo($palabra) {
    
    $palabra = strtolower(str_replace(' ', '', $palabra));
    
    
    $reversa = strrev($palabra);

    if ($palabra === $reversa) {
        return true;
    } else {
        return false;
    }
}

$texto = "ANA";

if (esPalindromo($texto)) {
    echo "La palabra o frase '$texto' ES un palíndromo.";
} else {
    echo "La palabra o frase '$texto' NO es un palíndromo.";
}
?>
