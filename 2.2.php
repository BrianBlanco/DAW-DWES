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

            $horaActual = date ("g:i:s a");
            // "g, i, s" indican que la salida sea en horas, minutos y segundos, y "a" indica que se muestre am o pm
            echo 'La hora actual es $horaActual';
           
            ?>   
           
        </h1>
       <h1>Al usar comillas simples, no interpreta las variables, las pone como texto plano sin conseguir ver su valor</h1>    </body>
</html>
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

            $horaActual = date ("g:i:s a");
            // "g, i, s" indican que la salida sea en horas, minutos y segundos, y "a" indica que se muestre am o pm
           
            echo "La hora actual es $horaActual";
           
            ?>   
           
        </h1>
       
    </body>
</html>
