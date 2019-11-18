<html>

<head>
    <meta charset="UTF-8">
</head>

<body>

    <?php

<<<<<<< HEAD
    $array = array(1, 2, 3, "Patata", "Aguacate");


    end($array);
    for ($i = count($array); $i > 0; $i--) {
=======
    $array = array(
        "uno"       => 1,
        "dos"       => 2,
        "tres"      => 3,
        "Aguacate"  => "Aguacate",
        "Patata"    => "Patata"
    );


    end($array);
    for ($i = 0; $i < count($array); $i++) {
>>>>>>> ce5afa0b3cebc13a98a2b740c17519eeb38b82c4
        echo "Elemento: " . current($array) . "<br>";
        prev($array);
    }

    
    ?>

</body>

</html>