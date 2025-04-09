<?php
$i = 0;
$announcements = [
    "a.html",
    "b.html",
    "c.html",
    "d.html",
    "e.html"
];
$reviews = [
    ["demon's souls",10, "really good game"],
    ["mario wonder",9.5, "very new, so can't say much about it, nice though"],
    ["mega man 2",8.0, "]not my favorite, it's cool though!"],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $announcement= $announcements[$i];
    include "announcements/$announcement";

    $review= $reviews[$i];
    $title = $review[0];
    $cijfer = $review[1];
    ?>
</body>
</html>