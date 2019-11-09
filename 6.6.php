<html>

<body>



    <h1>

        <?php

        $cadena = "aguacate";
        echo "Original: $cadena <br>";

        for ($i = 0; $i < strlen($cadena); $i++) {
            $letra = $cadena[$i];

            switch ($letra) {
                case 'a':
                    $cadena2 .= 'e';
                    break;

                case 'e':
                    $cadena2 .= 'i';

                    break;

                case 'i':
                    $cadena2 .= 'o';

                    break;

                case 'o':
                    $cadena2 .= 'u';

                    break;

                case 'u':
                    $cadena2 .= 'a';
                    break;
                default:
                    $cadena2 .= $cadena[$i];
                    break;
            }
        }

        for ($i = 0; $i < strlen($cadena2); $i = $i + 2) {
            $aux .= $cadena2[$i+1].$cadena2[$i];
        }

        echo "Codificado: $aux <br>";

        for ($i = 0; $i < strlen($aux); $i = $i + 2) {
            $aux2 .= $aux[$i+1].$aux[$i];
        }

        for ($i = 0; $i < strlen($aux2); $i++) {
            $letra = $aux2[$i];

            switch ($letra) {
                case 'e':
                    $cadena3 .= 'a';
                    break;

                case 'i':
                    $cadena3 .= 'e';
                    break;

                case 'o':
                    $cadena3 .= 'i';
                    break;

                case 'u':
                    $cadena3 .= 'o';
                    break;

                case 'a':
                    $cadena3 .= 'u';
                    break;
                default:
                    $cadena3 .= $cadena2[$i];
                    break;
            }
        }

        echo "Descodificado: $cadena3";

        ?>



    </h1>



</body>


</html>