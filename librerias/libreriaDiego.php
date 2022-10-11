
<?php

//La sentencia include incluye y evalúa el archivo especificado.
/*La sentencia include_once incluye y evalúa el fichero especificado Si el código del fichero ya ha sido incluido,
 no se volverá a incluir, e include_once devolverá true*/
/*La sentencia require es idéntica a include excepto que en caso de fallo producirá un error fatal
 de nivel E_COMPILE_ERROR. En otras palabras, éste detiene el script mientras que include sólo emitirá una advertencia.*/
//La sentencia require_once es idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluirá de nuevo.

function comprobar_numero($num)
{
    $numero = (is_int($num) && $num <= 9 && $num >= 0) ?  $num : "El dígito no está entre 0 y 9 o no es un número entero";
    echo $numero . "<br>";
}

function comprobar_longitud($str)
{
    $numero = (is_string($str)) ?  strlen($str) : "El dato introducido no es un string";
    echo $numero . "<br>";
}

function potencia($a, $b)
{
    echo pow($a, $b) . "<br>";
}

function comprobar_vocal($x)
{
    $vocales = ["a", "e", "i", "o", "u"];
    $vocal = (in_array(strtolower($x), $vocales)) ?  "true" : "false";
    echo $vocal . "<br>";
}

function comprobar_par($num)
{
    $numero = (($num % 2) == 0) ?  "Par" : "Impar";
    echo $numero . "<br>";
}

function mayusculas($str)
{
    echo strtoupper($str) . "<br>";
}

function hora()
{
    echo date_default_timezone_get();
}

function amanecer_ocaso()
{
    echo date("D M d Y") . ', hora de la salida del sol : ' . date_sunrise(time(), SUNFUNCS_RET_STRING, 43, -8.5, 90, 2) . "<br>";
    echo date("D M d Y") . ', hora de la puesta de sol : ' . date_sunset(time(), SUNFUNCS_RET_STRING, 43, -8.5, 90, 2) . "<br>";
}
