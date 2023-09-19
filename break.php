<?php 
$veryOld= 0;
$old = 1;

for($i =2; $i <100; $i++){
    $new = $old + $veryOld;

    if($new > 100){
        break;
    }
    echo $new. "\n";
    $veryOld = $old;
    $old = $new;

}


