<?php
// Haz un programa que declare un arreglo de palabras y muestre solo las que tienen más de 5 letras.
$palabras = array("Pera", "Mango", "Platano", "sandia", "kiwi");
$palabraslarga = array();
foreach ($palabras as $palabra) {
    if (strlen($palabra) > 5) {
        $palabraslarga[] = $palabra;
    }
}

echo "Palabras con más de 5 letras: " . implode(", ", $palabraslarga);




?>