<html>

<head>
    <meta charset="UTF-8">
</head>

<body>

    <?php

    $array = array(1, 2, 3, "Patata", "Aguacate");


    end($array);
    for ($i = count($array); $i > 0; $i--) {
        echo "Elemento: " . current($array) . "<br>";
        prev($array);
    }

    
    ?>

</body>

</html>