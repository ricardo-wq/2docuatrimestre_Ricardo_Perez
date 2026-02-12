//Funciones en php
<?php
function saludar($nombre) {
    
    return "Hola, " . $nombre . "¡Bienvenido a la clase de PHP!" . "<p>";
    saludar("Juan");
    $nombre_alumno = "María";
     saludar($nombre_alumno);
     function informacion_personal($nombre, $edad, $ciudad, $estatura, $peso, $profession) {
        return "Mi nombre es " . $nombre . ", tengo " . $edad . " años, mido " . $estatura . " cm y peso " . $peso . " kg. Vivo en " . $ciudad . " y soy " . $profession . "." . "<p>";
     }

}   