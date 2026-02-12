<?php
//Haz un programa que declare un arreglo y cuente cuantos pares e impares hay en el arreglo
$arreglo = [2,20,55,23,79,90,34,67,12,45,10];
$pares = 0;
$impares = 0; 
foreach($arreglo as $numero){
if ($numero % 2 ==0 ){
    $pares++;
}else{
    $impares++;
}


};echo "La cantidad de numeros pares es: $pares <br>";
echo "La cantidad de numeros impares es: $impares"; 
?>