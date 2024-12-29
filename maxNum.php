<?php
function getMax(array $arr1){
    $max=0;
    for($i=0;$i<count($arr1);$i++){
        if($arr1[$i]>$max){
            $max=$arr1[$i];
        }
    }
    echo "The max value is ".$max;
}

getMax([3, 1, 4, 1, 5, 9,50,100,20]);