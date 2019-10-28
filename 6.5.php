<html>

<body>



    <h1>

        <?php

        $cadena = "aeiou";
        $vocal = ["a", "e", "i", "o", "u"];
        echo $cadena."<br>";

        for ($i = 0; $i <= strlen($cadena); $i++) {
            $letra = $cadena[strlen($cadena) - $i];
            $vocalACambiar = in_array($letra, $vocal);
            if ($vocalACambiar) {
                $posicionArray = array_search($letra, $vocal);
                echo array_search($letra, $vocal);
                $cadena[strlen($cadena) - $i] = $vocal[$posicionArray + 1];
            }

            $cadena2 .= $cadena[strlen($cadena) - $i];
        }

        echo $cadena2;

        ?>



    </h1>



</body>


</html>