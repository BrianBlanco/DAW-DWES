<html>
<head>
</head>

<body>
    <?php


    $cadena = "Briangiannoni@gmail.com";
    $aux = "";
    $aux2 = "";
    if (strpos($cadena, "@")) {
        $comprobarArroba = true;
    } else {
        $comprobarArroba = false;
    }
    echo "La cadena es: $cadena <br>";
    $posicion = strpos($cadena, "@");
    if ($comprobarArroba) {
        $aux2 = substr($cadena, 0, $posicion);

        echo "Sin Modificar: $aux2<br>";

        $aux = strstr($cadena, "@");

        $aux = substr($aux, 1, strlen($aux));

        echo "Modificada: $aux <br>";

    }
?>
</body>

</html>