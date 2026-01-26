<?php
//Haz un programa que declare una frase y reemplace una palabra por otra.
$frase = "El rápido zorro marrón salta sobre el perro perezoso.";
$palabra_a_reemplazar = "zorro";
$palabra_nueva = "gato";
$frase_modificada = str_replace($palabra_a_reemplazar, $palabra_nueva, $frase);
echo "Frase original: $frase\n";
echo "Frase modificada: $frase_modificada\n";
?>
