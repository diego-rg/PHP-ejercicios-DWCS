<?php 

/*
1. Crea una matriz con 30 posiciones y que contenga números aleatorios entre 0 y 20 (inclusive). Uso de la función [rand](https://www.php.net/manual/es/function.rand.php). Imprima la matriz creada anteriormente.
*/ 
$numeros = [];
for($i =0; $i<30; $i++) {
    array_push($numeros, rand(10, 20));
};
foreach($numeros as $num) {
    echo $num."</br>";
};


/* 
2. (Optativo) Cree una matriz con los siguientes datos: `Batman`, `Superman`, `Krusty`, `Bob`, `Mel` y `Barney`.
    - Elimine la última posición de la matriz. 
    - Imprima la posición donde se encuentra la cadena 'Superman'. 
    - Agregue los siguientes elementos al final de la matriz: `Carl`, `Lenny`, `Burns` y `Lisa`. 
    - Ordene los elementos de la matriz e imprima la matriz ordenada. 
    - Agregue los siguientes elementos al comienzo de la matriz: `Apple`, `Melon`, `Watermelon`.
*/

$datos = ["Batman","Superman","Krusty","Bob","Mel","Barney"];
foreach($datos as $d) {
    echo $d;
}
echo "</br>";

array_pop($datos);
foreach($datos as $d) {
    echo $d;
}
echo "</br>";

echo array_search("Superman", $datos);
echo "</br>";

array_push($datos, "Carl", "Lenny", "Burns", "Lisa");
foreach($datos as $d) {
    echo $d;
}
echo "</br>";

sort($datos);
foreach($datos as $d) {
    echo $d;
}
echo "</br>";

array_unshift($datos, "Apple", "Melon", "Watermelon");
foreach($datos as $d) {
    echo $d;
}
echo "</br>";
/*3. (Optativo) Cree una copia de la matriz con el nombre `copia` con elementos del 3 al 5.
    - Agregue el elemento 'Pera' al final de la matriz. */ 






?>