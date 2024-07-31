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
dd(calculateSum(calculateSum($data)));


/*
 * Imagine, you are working on the very beginning prototype of the “Trap Finder” 
 * game engine (some kind of Minesweeper-like game).
 * 
 * iven an existing object “$trap”, an instance of “Trap” class, with a lot of 
 * unknown properties of various types inside, but like any kind of other 
 * “generic traps” objects, this one also extends a known “GenericTrap” abstract class. 
 * 
 * Requirements:
 *   - Create a new class “TrapFinder” which extends an existing abstract 
 *     class “AbstractTrapFinder” and complete the method “doSomething” 
 *     with all the required functionality, to “disarm” a trap passed on 
 *     it as “$trap” parameter.
 *   - When disarm happens, the method “doSomething” should return a total count 
 *     of all the properties inside a “$trap” object, to calculate a total score.
 * 
 * Constraints:
 *   - Trap disarms, when a method “disarm” is called.
 */
abstract class AbstractTrapFinder
{
    abstract public function doSomething($trap);
}

class TrapFinder extends AbstractTrapFinder
{
    public function doSomething($trap)
    {
        $trap->disarm();
        return count(get_object_vars($trap));
    }
}

abstract class GenericTrap
{
    abstract public function disarm();
}

$trap = new Trap();
$trapFinder = new TrapFinder();
$resp =$trapFinder->doSomething($trap);
dump($resp);