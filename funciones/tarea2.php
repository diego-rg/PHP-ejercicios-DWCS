<?php


/**
 * Crea unha función chamada `comprobar_nif()` que reciba un NIF e devolva:
 *  `true` se o NIF é correcto.
 *  false` se o NIF non é correcto.
 * A letra do DNI é unha letra para comprobar que o número introducido anteriormente é correcto. Para obter a letra do DNI débense levar a cabo os seguintes pasos:
 * Dividimos o número entre 23.
 * Co resto da división anterior, obtemos a letra corresponde na seguinte táboa: 
 */

function comprobar_nif($dni)
{
    $letra = substr($dni, -1);
    $string_numero = substr($dni, 0, 8);
    $numero = (int)$string_numero;
    gettype($numero);
    $letra_correspondiente = "";
    $coeficiente = $numero % 23;
    switch ($coeficiente) {
        case 0:
            $letra_correspondiente = "T";
            break;
        case 1:
            $letra_correspondiente = "R";
            break;
        case 2:
            $letra_correspondiente = "W";
            break;
        case 3:
            $letra_correspondiente = "A";
            break;
        case 4:
            $letra_correspondiente = "G";
            break;
        case 5:
            $letra_correspondiente = "M";
            break;
        case 6:
            $letra_correspondiente = "Y";
            break;
        case 7:
            $letra_correspondiente = "F";
            break;
        case 8:
            $letra_correspondiente = "P";
            break;
        case 9:
            $letra_correspondiente = "D";
            break;
        case 10:
            $letra_correspondiente = "X";
            break;
        case 11:
            $letra_correspondiente = "B";
            break;
        case 12:
            $letra_correspondiente = "N";
            break;
        case 13:
            $letra_correspondiente = "J";
            break;
        case 14:
            $letra_correspondiente = "Z";
            break;
        case 15:
            $letra_correspondiente = "S";
            break;
        case 16:
            $letra_correspondiente = "Q";
            break;
        case 17:
            $letra_correspondiente = "V";
            break;
        case 18:
            $letra_correspondiente = "H";
            break;
        case 19:
            $letra_correspondiente = "L";
            break;
        case 20:
            $letra_correspondiente = "C";
            break;
        case 21:
            $letra_correspondiente = "K";
            break;
        case 22:
            $letra_correspondiente = "E";
            break;
    }
    echo ($letra_correspondiente == $letra) ? "true" . "<br>" : "false" . "<br>";
}
comprobar_nif("12345678Z");
comprobar_nif("12345678A");
