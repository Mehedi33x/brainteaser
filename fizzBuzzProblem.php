<!-- #FizzBuzz Problem -->

<?php
for($i=1;$i<=20;$i++){
    // echo $i;
    if($i%3==0){
        echo'Fizz';
    }else if($i%5==0) {
        echo 'Buzz';
    }else if($i%15==0) {
        echo 'FizzBuzz';
    }
    else{
        echo $i;
    }
    echo "\n";
}   