<html>

<body>
    <?php

    $libro1 = array(
        "titulo" => "Don Quijote",
        "autor"  => "Cervantes",
        "fecha"  => 1615
    );
    $libro2 = array(
        "titulo" => "El hobbit",
        "autor"  => "Tolkien",
        "fecha"  => 1937
    );

    $biblioteca = array("lib1" => $libro1, "lib2" => $libro2);

    foreach ($biblioteca as $libro => $detalles) {
        echo "$libro<br>";

        foreach ($detalles as $indice => $valor) {
            echo "<p>$indice:$valor</p>";
        }
        echo "<br>";
    }
    ?>

</body>

</html>