<?php

require_once 'animal.php';
require_once 'frog.php';
require_once 'ape.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Animals</title>
</head>

<body>
    <?php
    $sheep = new Animal("shaun");
    echo "Name: " . $sheep->get_name() . "<br>";
    echo "Legs: " . $sheep->get_legs() . "<br>";
    echo "Cold Blooded: " . $sheep->get_cold_blooded() . "<br><br>";

    $kodok = new Frog("buduk");
    echo "Name: " . $kodok->get_name() . "<br>";
    echo "Legs: " . $kodok->get_legs() . "<br>";
    echo "Cold Blooded: " . $kodok->get_cold_blooded() . "<br>";
    $kodok->jump();
    echo "<br>";

    $sungokong = new Ape("kera sakti");
    echo "Name: " . $sungokong->get_name() . "<br>";
    echo "Legs: " . $sungokong->get_legs() . "<br>";
    echo "Cold Blooded: " . $sungokong->get_cold_blooded() . "<br>";
    $sungokong->yell();


    ?>
</body>

</html>