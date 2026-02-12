<?php
//Haz un programa que declare una frase y cuente las vocales 
$frase = "Hola mi nombre es ricardo y me gusta la programación";
$vocales = array("a", "e", "i", "o", "u , A", "E", "I", "O", "U");
$contador_vocales = 0;
for ($i = 0; $i < strlen($frase); $i++) {
    if (in_array($frase[$i], $vocales)) {
        $contador_vocales++;
    }
}
echo "La cantidad de vocales en la frase es: $contador_vocales";
?>