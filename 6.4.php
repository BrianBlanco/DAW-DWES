<html>

<body>



    <h1>

        <?php

        $cadena = "Hola gatos";

        echo $cadena."<br>";

        for ($i = 0; $i <= strlen($cadena); $i++) {
            if ($cadena[strlen($cadena) - $i] == 'a') {
                $cadena[strlen($cadena) - $i] = 'e';
            }

            $cadena2 .= $cadena[strlen($cadena) - $i];
        }

        echo $cadena2;

        ?>



    </h1>



</body>


</html>