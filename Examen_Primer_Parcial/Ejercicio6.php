<?php
//Haz un programa que ordene un arreglo de numeros sin funciones predefinidas
$arreglo = [20, 22,563, 4346, 142, 22, 1];
for ($i = 0; $i < count($arreglo); $i++) {
    for ($j = 0; $j < count($arreglo) - 1; $j++) {
        if ($arreglo[$j] > $arreglo[$j + 1]) {
            $temp = $arreglo[$j];
            $arreglo[$j] = $arreglo[$j + 1];
            $arreglo[$j + 1] = $temp;
        }
    }
}

echo "El arreglo ordenado es: ";
foreach ($arreglo as $numero) {
    echo $numero . " ";
}

