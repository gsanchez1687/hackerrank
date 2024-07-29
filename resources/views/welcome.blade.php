<?php

//Encontrar el numero en un array de entrada en la funcion
 function findNumber($arr, $k) {
    
    $result = "NO";
    foreach($arr as $value){
        if($value == $k){
            $result = "YES";
            break;
        }
    }
    return $result;

}

dump(findNumber([1,2,3,4,5], 1));


//devoler los numeros imperes entre dos numeros de entrada en la funcion
function oddNumbers($l, $r) {
    
    $result = [];
    for($i = $l; $i <= $r; $i++){
        if($i % 2 != 0){
            $result[] = $i;
        }
    }
    return $result;

}
dump(oddNumbers(2, 5));


//Dado un array de números enteros, encuentra la suma de sus elementos.
function simpleArraySum($ar) {
    return array_sum($ar);
}

dump(simpleArraySum([1,2,3]));


function aVeryBigSum($ar) {
    return array_sum($ar);
}
dump(aVeryBigSum([1000000001, 1000000002, 1000000003, 1000000004, 1000000005]));

function diagonalDifference($arr) {
    $n = count($arr);
    $d1 = 0;
    $d2 = 0;
    for($i = 0; $i < $n; $i++){
        $d1 += $arr[$i][$i];
        $d2 += $arr[$i][$n - $i - 1];
    }
    return abs($d1 - $d2);
}

dump(diagonalDifference([[11, 2, 4], [4, 5, 6], [10, 8, -12]]));



//Se le da una matriz 2D de dimensión  y un entero positivo . Tienes que rotar los tiempos de la matriz e imprimir la matriz resultante. La rotación debe ser en sentido contrario a las agujas del reloj. Rotación de un  matrix se representa mediante la siguiente figura. Tenga en cuenta que en una rotación, debe desplazar los elementos en un solo paso.
