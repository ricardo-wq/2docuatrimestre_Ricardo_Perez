<?php

// Definimos los números
$num1 = 10;
$num2 = 5;
$num3 = 2;

// Operaciones
$suma = $num1 + $num2;
$resta = $num3 - $num2;
$multiplicacion = $num3 * $num2;
$division = $num1 / $num3;
$modulo = $num1 % $num3;
$exponente = $num2 ** 2;

// Salida
echo "<p>
Suma: $suma <br>
Resta: $resta <br>
Multiplicación: $multiplicacion <br>
División: $division <br>
Módulo: $modulo <br>
Exponente: $exponente <br>
</p>";


// Operadores de asignación
$a= 5; // Asignación simple
echo "<p> Valor inicial de a: $a </p> <br>";
$a += 3; // Suma y asigna
echo "<p> Valor de a después de += 3: $a </p> <br>";
$a = 2; // Resta y asigna
echo "<p> Valor de a después de 2: $a </p> <br>";
$a = 4; // Multiplica y asigna
echo "<p> Valor de a después de *= 4: $a </p> <br>";
$a = 2; // Divide y asigna
echo "<p> Valor de a después de /= 2: $a </p> <br>";
$a %= 5; // Módulo y asigna
echo "<p> Valor de a después de %= 5: $a </p> <br>";
 $a **3; // Exponente y asigna
echo "<p> Valor de a después de ** 3: $a </p> <br>";














?>
