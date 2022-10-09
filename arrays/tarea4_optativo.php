<?php

/*
En un *string*, tenemos almacenados varios datos agrupados en ciudad, país y continente. El formato es `ciudad,pais,continente` y cada grupo *ciudad-pais-continente* se separa co un `;`.
$informacion = "Tokyo,Japan,Asia;Mexico City,Mexico,North America;New York City,USA,North America;Mumbai,India,Asia;Seoul,Korea,Asia;Shanghai,China,Asia;Lagos,Nigeria,Africa;Buenos Aires,Argentina,South America;Cairo,Egypt,Africa;London,UK,Europe";
Crea una aplicación PHP que imprima toda la información almacenada en el *string* en una tabla con 3 columnas. 
Con la información anterior, realiza las seguintes tareas:
1. Crea la estrutura de datos y almacena toda la información anterior.
1. Utilizando a instrución `foreach` e listas HTML, imprime toda a información almacenada para que apareza de xeito similar ao exemplo mostrado.
*/

$informacion = "Tokyo,Japan,Asia;Mexico City,Mexico,North America;New York City,USA,North America;Mumbai,India,Asia;Seoul,Korea,Asia;Shanghai,China,Asia;Lagos,Nigeria,Africa;Buenos Aires,Argentina,South America;Cairo,Egypt,Africa;London,UK,Europe";

$array_info = explode(";", $informacion);

$array_data = [];

foreach ($array_info as $dato) {
    array_push($array_data, explode(",", $dato));
}

echo "<script>console.log(JSON.parse('" . json_encode($array_data) . "'));</script>";
echo "<script>console.log(JSON.parse('" . json_encode($array_info) . "'));</script>";

// foreach ($array_data as $ar) {
//     echo "<br>" . $ar[0];
// }

// foreach ($array_data as $ar) {
//     echo "<br>" . $ar[1];
// }

// foreach ($array_data as $ar) {
//     echo "<br>" . $ar[2];
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Ciudad</th>
                <th>País</th>
                <th>Continente</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($array_data); $i++) {
                echo "<tr>" . "<td>" . $array_data[$i][0]  . "</td>" . "<td>" . $array_data[$i][1]  . "</td>" . "<td>" . $array_data[$i][2]  . "</td>" . "</tr>";
            }
            ?>

        </tbody>
    </table>
</body>

</html>