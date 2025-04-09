<?php
$afstand = 928.80;
$literPrijs = 1.89;
$EnkeleTreinReis = 60;
$tankInhoud = 50;

$LiterVerbruik = ($afstand / 15);
$AantalTanken = ($tankInhoud / $afstand);
$ReisKosten = ($LiterVerbruik * $literPrijs);

if($ReisKosten > $EnkeleTreinReis) {
    echo "Ik ga met de trein";
}
    else{
       echo "Ik ga met de auto"; 
    }

echo "<br> Afstand: ";
echo $afstand;
echo "<br> reis kosten: ";
echo $ReisKosten;
echo "<br> Liter verbruik: ";
echo $LiterVerbruik;
echo "<br> Aantal tanken: ";
echo $AantalTanken;
?>