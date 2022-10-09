<?php 

//1. Almacena en un array los 10 primeros números pares. Imprímelos cada uno en una línea.
$pares = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
foreach($pares as $num) {
echo $num."</br>";
}




/* 2. Imprime los valores del array asociativo siguiente usando un foreach:
$v[1]=90;
$v[10] = 200;
$v[‘hola’]=43;
$v[9]=’e’;
*/ 
$datos = [
    '1'   => 90,
    '10'     => 200,
    'hola'         => 43,
    '9' => "e"
];

foreach ($datos as $d) {
    echo $d."<br />";
}


?>