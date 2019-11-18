<html>

<head>
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
    for ($i = count($array); $i > 0; $i--) {
        echo "Elemento: " . current($array) . "<br>";
        prev($array);
    }

    
    ?>

</body>

</html>