<?php

    
    $getal = 3.14159;
    $afgerond = ceil($getal);

    $getal2 = 3.14159;
    $afgerond2 = floor($getal2); 
    echo "Als je $getal naar boven afrond dan krijg je: $afgerond <br>";
    echo "Als je $getal2 naar beneden afrond dan krijg je: $afgerond2 <br>";

    $random1 = rand(1,100);
    $random2 = rand(1,100);
    $random3 = rand(1,100);

    $AntwoordSom1 = $random1 + $random2;
    $AntwoordSom2 = $AntwoordSom1 / $random3;

    echo $AntwoordSom2;
    echo "<br>";
    echo $AntwoordSom1
?>