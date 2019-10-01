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

            $horaActual = date ("j/M/Y - g:i:s a");
            // "j", "M" e "Y" indican el día del mes, el mes en el que está y el año junto a la hora del momento en el que se cargue la página
           
            echo "La hora actual es $horaActual";
           
            ?>   
           
        </h1>
       
    </body>
</html>
