<html>

<head>
</head>

<body>

    <?php

    $array = array(
        "pepino"    => "pepinillo",
        "guapo"     => "brian",
        "mandarian" => "mandarina",
        "Aguacate"  => "aguacate",
        "Patata"    => "patata"
    );

    foreach ($array as $posicion => $item) {
        echo "Sin ucfirst: $item <br>";
<<<<<<< HEAD
        $array[$posicion] = ucfirst($array[$posicion]);
        echo "Con ucfirst: $array[$posicion]<br><br>";
=======
        $array[$posicion];
        //$array[$posicion] = ucfirst($array[$posicion]);
        echo "Con ucfirst: $item <br><br>";
>>>>>>> ce5afa0b3cebc13a98a2b740c17519eeb38b82c4
    }

    ?>

</body>

</html>