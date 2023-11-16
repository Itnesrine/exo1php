<?php


$number1 = 12;
$number2 = 20;
$operation = "+";
$resultat = 0;
if ($operation == "+") {
    $resultat = $number1 + $number2;
} elseif ($operation == "-") {
    $resultat = $number1 - $number2;
} elseif ($operation == "*") {
    $resultat = $number1 * $number2;
} elseif ($operation == "/") {
    $resultat = $number1 / $number2;
}

echo $resultat;
?>