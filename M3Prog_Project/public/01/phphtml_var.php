<?php

$title = "mijn mooie website";
$datum = date('d-m-Y');
$tijd = date("H:i");
$favorieteGame = "super metroid";
$mooisteGetal = 42;
$favorieteShow = "Breaking Bad";
$leuksteStad = "Parijs";

$loodsNummer = "15A";
$loodsNummer = "16A";

?>

<!doctype html>
<html lang="en">
    <head>
        <title><?php echo $title ?></title>
    </head>
    <body>
        <h2>De datum vandaag is: <?php echo $datum?>,
         en de tijd is <?php echo $tijd?> uur.
        
        <p><h2>Mijn favoriete game :</h2><?php echo $favorieteGame;?></p>
        <p><h2>Mooiste getal:</h2><?= $mooisteGetal ?></p>
        <p><h2>Favoriete show</h2><?= $favorieteShow ?></p>
        <p><h2>Leukste stad:</h2><?= $leuksteStad ?></p>

    </body>
</html>