<html>

<head>
        <style>
                h1 {
                        border: 1px solid red;
                }
                body {
                        background-color: yellow;
                }
        </style>
</head>
    <body>
       
        <h1>
            <?php    
                //echo $valorAComprobarM;
                $numero = 3;
                isInt($numero);

                $letra = "e";
                isInt($letra);

                $palabra = "patata";
                isInt($palabra);

                function isInt($isInt) {
                        if(is_int($isInt)) {
                                echo "Es un número<br>";
                        } else {
                                echo "No es un número<br>";
                        }
                }
            ?>   
           
        </h1>
       
    </body>
</html>
