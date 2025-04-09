<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="M3prog\m3prog_project\public\assets\css\style.css">
</head>
<body>
    <?php
    $pokemons = ["Greninja", "Goldengo","Snorlax","Marowak","Geodude"];
    $images = [
        "https://assets.pokemon.com/assets/cms2/img/pokedex/full/658.png", // Greninja
        "https://assets.pokemon.com/assets/cms2/img/pokedex/full/1000.png", // Goldengo
        "https://assets.pokemon.com/assets/cms2/img/pokedex/full/143.png", // Snorlax
        "https://assets.pokemon.com/assets/cms2/img/pokedex/full/105.png", // Marowak
        "https://assets.pokemon.com/assets/cms2/img/pokedex/full/074.png"  // Geodude
    ];
    for ($i = 0; $i < count($pokemons); $i++) {
        echo "<h1>" . $pokemons[$i] . "</h1>";  
        echo "<img src='" . $images[$i] . "' alt='" . $pokemons[$i] . "'>";  
    }
    ?>
</body>
</html>