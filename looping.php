<?php

function evenNumbers($start, $end,$step){
    for($i = $start; $i <= $end; $i += $step){
        if($i % 2 == 0){
            echo $i . " ";
        }else{
            echo $i . " ";
        }
    }
}

evenNumbers(1, 20,2);
echo"========================\n";
function EvenNumber($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 === 0) {
            echo $i . " ";
        }else{
            echo $i . " ";
        }
        $i += $step;
    }
}

EvenNumber(2, 20, 2);
echo"========================\n";
function printEvenNumbers($start, $end, $step) {
    $i = $start;
    do {
        if ($i % 2 === 0) {
            echo $i . " ";
        }else{
            echo $i . " ";
        }
        $i += $step;
    } while ($i <= $end);
}

printEvenNumbers(1, 20, 2);



