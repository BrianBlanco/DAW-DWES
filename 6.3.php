<html>

<body>



    <h1>

        <?php

            $cadena = "Hola gatos";

            for ($i = 0; $i <= strlen($cadena); $i++) { 
                $cadena2 .= $cadena[strlen($cadena) - $i];
            }

            echo $cadena2;

        ?>



    </h1>



</body>


</html>