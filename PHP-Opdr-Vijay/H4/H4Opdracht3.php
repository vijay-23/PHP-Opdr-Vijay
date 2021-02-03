<?php
function check($number){
    $n = strlen($number);
    $digitSum = 0;
    for ($i = 0; $i < $n; $i++)
        $digitSum += ($number[$i] - '0');

    return ($digitSum % 3 == 0);
}

$number = "12";
$answer = check($number) ? "Yes" : "No ";
echo($answer);