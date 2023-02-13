<?php
//1. Write a Reusable PHP Function that can check Even & Odd Number And Retun Decision.
$number = 115;

function evenOdd($number) {
    if($number%2==0) {
        return "This number is even";
    }else{
        return "This number is odd";
    }
}

$decision = evenOdd($number);
echo $decision;
echo "\n";

//2. 1+2+3..........100 Write a loop to calculate the  summation of the series.
$sum = 0;
for($i=1;$i<=100;$i++){
    $sum +=$i;
}

echo($sum);