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



//cree una funcion "calculateSum" que acepte un unico parametro de cadena, $data, una lista de numeros delimitados por punto y coma(;). Devolver la suma
function calculateSum($data){
    $numbers = explode(";", $data);
    return array_sum($numbers);
}
$data = "0.4366166635587;0.50621859147503;-1074;0.4860623178473;0.48974117519788;0.22422161895047;0.06429465024932;0.91309437011978;1181;0.32756097862849";
dump(calculateSum(calculateSum($data)));


//Dados cinco enteros positivos, encuentre los valores mínimo y máximo que se pueden calcular sumando exactamente cuatro de los cinco enteros. A continuación, imprima los respectivos valores mínimo y máximo como una sola línea de dos enteros largos separados por espacios.
//ejemplo: [1, 3, 5, 7, 9] => 16 24
//la suma minima es 1 + 3 + 5 + 7 = 16
//la suma maxima es 3 + 5 + 7 + 9 = 24

function miniMaxSum($arr) {
    $min = 1;
    $max = 1;
    $sum = 0;
    foreach($arr as $value){
        $sum += $value;
        if($value < $min){
            $min = $value;
        }
        if($value > $max){
            $max = $value;
        }
    }
    dump($min);
    return ($sum - $max) . " " . ($sum - $min);
}

dump(miniMaxSum([1, 2, 3, 4, 5]));