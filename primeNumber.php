<?php
function checkPrime($number){
    if($number%$number==0 && $number%1==0) {
        echo "Prime";
    }
}

checkPrime(12);