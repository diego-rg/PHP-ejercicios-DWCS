<?php

/**  Cree un formulario que solicite su nombre y apellido. Cuando se reciben los datos, se debe mostrar la siguiente información:
 * Nombre: `xxxxxxxxx`
 *  Apellidos: `xxxxxxxxx`
 * Nombre y apellidos: `xxxxxxxxxxxx xxxxxxxxxxxx`
 * Su nombre tiene caracteres `X`.
 * Los 3 primeros caracteres de tu nombre son: `xxx`
 * La letra A fue encontrada en sus apellidos en la posición: `X`
 * Tu nombre en mayúsculas es: `XXXXXXXXX`
 * Sus apellidos en minúsculas son: `xxxxxx`
 * Su nombre y apellido en mayúsculas: `XXXXXX XXXXXXXXXX`
 * Tu nombre escrito al revés es: `xxxxxx`
 */


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nombre: <input type="text" name="nombre">
        <br><br>
        Apellidos: <input type="text" name="apellidos">
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <br><br>
    </form>
</body>

</html>

<?php

echo "Nombre: " . $_POST["nombre"] . "<br>";
echo "Apellidos: " . $_POST["apellidos"] . "<br>";
echo "Nombre y apellidos: " . $_POST["nombre"] . " ", $_POST["apellidos"] . "<br>";
echo "Su nombre tiene caracteres: " . strlen($_POST["nombre"]) . "<br>";
echo "Los 3 primeros caracteres de tu nombre son: " . substr($_POST["nombre"], 0, 3) . "<br>";
echo "La letra A fue encontrada en sus apellidos en la posición: " . strpos(strtoupper($_POST["nombre"]), "A") . "<br>";
echo "Su nombre contiene " . substr_count(strtoupper($_POST["nombre"]), "A") . ' caracteres "A"' . "<br>";
echo "Tu nombre en mayúsculas es: " . strtoupper($_POST["nombre"]) . "<br>";
echo "Sus apellidos en minúsculas son: " . strtolower($_POST["apellidos"]) . "<br>";
echo "Su nombre y apellido en mayúsculas: " . strtoupper($_POST["nombre"]) . " " . strtoupper($_POST["apellidos"]) . "<br>";
echo "Tu nombre escrito al revés es: " . strrev($_POST["nombre"]) . "<br>";

?>