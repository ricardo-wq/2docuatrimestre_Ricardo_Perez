<?php
// Haz un programa que declare una frase y muestre la palabra más larga
$frase = "Hola mi nombre es ricardo y me gusta la programación";

// Dividimos la frase en palabras
$palabras = explode(" ", $frase);
$palabra_mas_larga = "";

// Recorremos cada palabra para encontrar la más larga
foreach ($palabras as $palabra) {
    if (strlen($palabra) > strlen($palabra_mas_larga)) {
        $palabra_mas_larga = $palabra;
    }
}

// Mostramos el resultado fuera del ciclo
echo "La palabra más larga es: $palabra_mas_larga";
?>
