<?php 
$N = 13; 
$M = 73;


$answer = '';
if (primeNumber($N) && primeNumber($M)){
    $divider = numberOfDividers($N);
    $divider_2 = numberOfDividers($M);
    if (!sameValues($divider,$divider_2)){ 
        $answer = 'Являются взаимно простыми числами';
    }else {
        $answer = 'Есть общие делители';
    }
}else {
    $answer = 'Один либо оба числа не являются простыми';
}

echo 'Исходные данные N: '.$N.'; M:'.$M.';';
echo '<br> Ответ: '.$answer;

// делители числа 
function numberOfDividers ($number){
    $answer = [];
    for ($i = 1; $i <= $number; $i++){
        if ($number % $i == 0){
            $answer[] = $i;
        }
    }   
    return $answer;
}

 // является ли число простым
 function primeNumber ($number){
    $answer = [];
    for ($i = 2; $i < $number; $i++){
        if ($number % $i == 0){
            $answer[] = $i;
        }
    }
    if ($answer){
        return false;
    }
    return $answer ? false : true;
}

// встречаются ли одинаковые значение в массиве кроме 1
function sameValues($mass_1, $mass_2){
    for ($i = 0; $i < counts($mass_1); $i++){
        for ($j = 0; $j < counts($mass_2); $j++){
            if (($mass_1[$i] == $mass_2[$j]) && ($mass_1[$i] != 1)){
                return true;
            }
        }
    }
    return false;
}


function counts($mass){
    $i = 1;            
    while ($mass[$i].'' != ''){
        $i++;
    }
    return $i;
}
?>