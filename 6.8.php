<html>

<head>

    <style>
        table {
            border: 1px solid red;
        }
    </style>
</head>

<body>



    <h1>

        <?php

        $cadena = "tocar";
        $cadenaStr = strlen($cadena);

        echo $cadena;


        for ($i = 0; $i < $cadenaStr; $i += 2) {
            $cadena2 = substr($cadena, $i, 2);
            $cadena3 .= $cadena2[1] . $cadena2[0];
        }

        echo "<p class='texto'>Cadena Retocada : $cadena3<br></p>"




        ?>



    </h1>



</body>


</html>