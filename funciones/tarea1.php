<?php

// 1. Crea una función que reciba un carácter e imprima se o carácter é un díxito entre 0 e 9.

function comprobar_numero($num)
{
    $numero = (is_int($num) && $num <= 9 && $num >= 0) ?  $num : "El dígito no está entre 0 y 9 o no es un número entero";
    echo $numero . "<br>";
}

comprobar_numero(5);
comprobar_numero(true);

// 2. Crea una función que reciba un string e devolva a súa lonxitude.
function comprobar_longitud($str)
{
    $numero = (is_string($str)) ?  strlen($str) : "El dato introducido no es un string";
    echo $numero . "<br>";
}

comprobar_longitud("hipopótamo");
comprobar_longitud(NAN);

// 3. Crea una función que reciba dous número `a` e `b` e devolva o número `a` elevado a `b`.
function potencia($a, $b)
{
    echo pow($a, $b) . "<br>";
}
potencia(5, 3);

// 4. Crea una función que reciba un carácter e devolva `true` se o carácter é unha vogal.
function comprobar_vocal($x)
{
    $vocales = ["a", "e", "i", "o", "u"];
    $vocal = (in_array(strtolower($x), $vocales)) ?  "true" : "false";
    echo $vocal . "<br>";
}

comprobar_vocal("A");
comprobar_vocal("Z");

// 5. Crea una función que reciba un número e devolva se o número é par ou impar.
function comprobar_par($num)
{
    $numero = (($num % 2) == 0) ?  "Par" : "Impar";
    echo $numero . "<br>";
}

comprobar_par(5);
comprobar_par(4);

// 6. Crea una función que reciba un string e devolva o string en maiúsculas.
function mayusculas($str)
{
    echo strtoupper($str) . "<br>";
}
mayusculas("casa");
// 7. Crea una función que imprima a zona horaria (*timezone*) por defecto utilizada en PHP.
function hora()
{
    echo date_default_timezone_get();
}
hora();

// 8. Crea una función que imprima a hora á que sae e se pon o sol para a localización por defecto. Debes comprobar como axustar as coordenadas (latitude e lonxitude) predeterminadas do teu servidor.
function amanecer_ocaso()
{
    echo date("D M d Y") . ', hora de la salida del sol : ' . date_sunrise(time(), SUNFUNCS_RET_STRING, 43, -8.5    , 90, 2) . "<br>";
    echo date("D M d Y") . ', hora de la puesta de sol : ' . date_sunset(time(), SUNFUNCS_RET_STRING, 43, -8.5, 90, 2) . "<br>";
}
amanecer_ocaso();
