<?php


/*
Crea un formulario para solicitar una de las siguientes bebidas:

    Bebida|PVP
    :-|:-:
    Coca Cola|1 €
    Pepsi Cola|0,80 €
    Fanta Naranja|0,90 €
    Trina Manzana|1,10 €
    
    A mayores, necesitamos un campo adicional con la cantidad de bebidas a comprar y un botón de <kbd>Solicitar</kbd>.
    
    La aplicación mostrará algo como:

    Pediste 3 botellas de Coca Cola. Precio total a pagar: 3 Euros.
    Puedes utilizar sentencias `switch` o `if`.
    */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <select name="opcion">
            <option value="cocacola">Coca Cola</option>
            <option value="pepsi">Pepsi Cola</option>
            <option value="fanta">Fanta Naranja</option>
            <option value="trina">Trina Manzana</option>
        </select>
        <input type="number" name="cantidad">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>

<?php
$precio = 0;
$producto = $_POST["opcion"];
$cantidad = $_POST["cantidad"];
switch ($_POST["opcion"]) {
    case "cocacola":
        $precio = 1;
        break;
    case "pepsi":
        $precio = 0.80;
        break;
    case "fanta":
        $precio = 0.90;
        break;
    case "trina":
        $precio = 1.1;
        break;
}

$precio_total = $precio * $cantidad;

echo "Pediste $cantidad botellas de $producto. En precio total a pagar es $precio_total";

?>