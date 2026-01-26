<?php
// Arreglo de nombres
$nombres = ["Ana", "Carlos", "Elena", "Ivan", "Oscar", "Maria", "Ursula", "Pedro", "Olga", "Angel", "Beatriz"];

echo "Nombres que empiezan con vocal:\n";

foreach ($nombres as $nombre) {
    $primeraLetra = strtolower($nombre[0]);
    
    if ($primeraLetra == 'a' || $primeraLetra == 'e' || 
        $primeraLetra == 'i' || $primeraLetra == 'o' || 
        $primeraLetra == 'u') {
        echo $nombre . "\n";
    }
}
?>