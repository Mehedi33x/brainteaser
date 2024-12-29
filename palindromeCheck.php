<?php

function Palindrome(string $given_string)
{
    $reveseString="";
    $normalized_string = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $given_string));
    for ($i = strlen($normalized_string) - 1; $i >= 0; $i--) {
        $reveseString .= $normalized_string[$i];
    }

    if($normalized_string===$reveseString){
        echo "Bingooooo it's a palindrome.";
    }else{
        echo "Nahh its not";
    }
}

Palindrome("deified");