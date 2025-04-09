<?php

function mijnPrint($printText)
{
    print($printText);
    print("<br>");
}

mijnPrint("regel 1");
mijnPrint("regel 2");
mijnPrint("regel 3");
mijnPrint($dezeGaatMee);

mijnprint("vraag1 het gaat fout omdat het printText print ook al zit er niks in die var");

$dezeGaatMee = "deze waarde wordt meegenomen";
?>