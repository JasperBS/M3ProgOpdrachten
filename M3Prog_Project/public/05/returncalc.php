<?php

function add($getal1, $getal2){
    $som = $getal1 + $getal2;
    return $som;
}
function subtract($getal1, $getal2){
    $som = $getal1 - $getal2;
    return $som;
}
function divide($getal1, $getal2){
    $som = $getal1 / $getal2;
    return $som;
}
function multiply($getal1, $getal2){
    $som = $getal1 * $getal2;
    return $som;
}



print add(2, 5);
echo "<br>";
print add(100, 100);
echo "<br>";
print add(4, 9);
echo "<br>";
print add(33, 33);
echo "<br>";
echo "<br>";
print subtract(56, 12);
echo "<br>";
print subtract(402, 315);
echo "<br>";
print divide(10,5);
echo "<br>";
print divide(25,5);
echo "<br>";
print multiply(10,10);
echo "<br>";
print multiply(12,54);






?>