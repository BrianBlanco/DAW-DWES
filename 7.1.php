<html>

<head>
    <meta charset="UTF-8">
</head>

<body>

    <?php

    $array = array(
        "uno"       => 1,
        "dos"       => 2,
        "tres"      => 3,
        "Aguacate"  => "Aguacate",
        "Patata"    => "Patata"
    );


    end($array);
    for ($i = 0; $i < count($array); $i++) {
        echo "Elemento: " . current($array) . "<br>";
        prev($array);
    }

    
    ?>

</body>

</html>