<?php
$aantalOpVoorraad = 20;
$opvoorraad= $aantalOpVoorraad > 0;

$Boolvar = false;
//if($opvoorraad == true)
if($aantalOpVoorraad <= 0){
    echo "niet op voorraad";
}

else
{
 echo "Artikel is op voorraad";
}