<?php
$stoplichtKleur = "G";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElseIf</title>
</head>
<body>
<?php
    if($stoplichtKleur = "R")
    {
        echo "<button style='background-color:#FF0000;height:25px;width:25px;'/>";
    }
    else if($stoplichtKleur = "G")
    {
        echo "<button style='background-color:#008000;height:25px;width:25px;'/>";
    }
    else
    {
        echo "<button style='background-color:#FFA500;height:25px;width:25px;'/>";
    }
?>
</body>
</html>

