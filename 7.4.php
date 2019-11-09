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
        $array[$posicion];
        //$array[$posicion] = ucfirst($array[$posicion]);
        echo "Con ucfirst: $item <br><br>";
    }

    ?>

</body>

</html>