<html>

<head>

</head>

<body>

        <h1>
                <?php

                define("BRIAN", "Es muy guapo");

                $defineString = 'define("BRIAN", "Es muy guapo");';

                echo "Versión de PHP y sistema operativo: ".PHP_VERSION."<br>";

                echo "Número de bytes máximos de un número entero: ".PHP_INT_SIZE."<br>";

                echo "Número más alto dentro de un número entero: ".PHP_INT_MAX."<br>";
                
                echo "Sistema operativo donde se construyó PHP: ".PHP_OS."<br>";

                echo "Variable definina manualmente con '".$defineString."' <br>que tiene el valor: ".BRIAN;



                ?>

        </h1>

</body>

</html>