<?php

function convertCurrency($amount, $fromCurrency, $toCurrency) {

    print("Amount: $amount, From: $fromCurrency, To: $toCurrency");

}


function sendEmail($to, $from, $subject, $message){

print("To: $to, From: $from, Subject: $subject, Message: $message");

}
function generateRandomString($length){
print("length:$length");
}
function calculateArea($length, $width){
print("length:$length, Width:$width");
}



convertCurrency(100, "euro", "yen");
print("<br>");
sendEmail("leraar@college.nl", "student@college.nl", "huiswerk", "voor volgende week");
print("<br>");
generateRandomString(10);
print("<br>");
calculateArea(10, 20);

?>