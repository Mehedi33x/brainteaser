<?php
function sum(array $data){
    $sum=0;
    foreach ($data as $element){
        $sum+=$element;
    }
    echo $sum;
}
$arr1=[1, 2, 3, 4, 5];
sum($arr1);
?>