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

    for ($i = 0; $i < count($array); $i++) {
         $elemento = each($array);
         echo "Sin upfirst: ".$elemento["value"]."<br>";
         $elemento["value"] = ucfirst($elemento["value"]);
         echo "Con upfirst: ".$elemento["value"]."<br><br>";
        
    }

    ?>

</body>

</html>