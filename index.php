<?php error_reporting();
//В массиве А(N) найти наибольший из всех отрицательных элементов и наименьший из всех положительных. 
$A = [1, -7, -4, 9, 8, 23, 17, 22, -199, 7, 4, 3, -20, 6];


$a = maxneg($A);
$b =minpos($A);
echo("A(n):<br>");
print_r($A);
echo("<br>Result:<br>");
echo("{$a}- наибольшее отрицательное; {$b} - наименьшее положительное");

function minpos($array){  // находит минимальное положительное
    $minv = maximal($array);
    if($minv < 0){
        return false;
    }
    for($i = 0; $i < count($array); $i++){
        if($array[$i] > 0 && $array[$i] < $minv){
                $minv = $array[$i];
        }
    }
    return $minv;
}

function maxneg($array){ //находит максимальное отрицательное 
    $maxv = minimal($array);
    if($maxv > 0){
        return false;
    }
    for($i = 0; $i < count($array); $i++){
        if($array[$i] < 0 && $array[$i] > $maxv){
            $maxv = $array[$i];
        }
    }
    return $maxv;
}

function minimal($array){ // нахождение минимума
    $minv = $array[0];
    for($i = 0; $i < count($array); $i++){
        if($array[$i] < $minv){
            $minv = $array[$i];
        }
    }
    return $minv;
}

function maximal($array){ // нахождение максимума
    $maxv = $array[0];
    for($i = 0; $i < count($array); $i++){
        if($array[$i] > $maxv){
            $maxv = $array[$i];
        }
    }
    return $maxv;
}
