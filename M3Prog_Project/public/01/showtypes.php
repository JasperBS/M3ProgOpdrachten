<?php

$nummer = 89;
$salaris = 0.5;
$zin = "hello zin";
$waarofniet=false;

$rijtje = [1,2,3,4,5];

echo gettype($nummer);
echo "<br>";
echo gettype($salaris);
echo "<br>";
echo gettype($zin);
echo "<br>";
echo gettype($waarofniet);
echo "<br>";
echo gettype($rijtje);
echo "<br>";

$huisnummer = 123;

$geslaagdVoorRijbewijs = true;

$prijsBenzine = 1.75;

echo "Huisnummer: " , $huisnummer , "<br>";
echo "Geslaagd voor rijbewijs: " , ($geslaagdVoorRijbewijs ? "Ja" : "Nee") , "<br>";
echo "Prijs per liter Euro 95 benzine: €" , number_format($prijsBenzine, 2) , "<br>";

        ?>