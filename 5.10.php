<html>
    <head>
        <title>
            Simulador de paloma mensajera
        </title>
        <link rel="stylesheet" type="text/css" href="common.css" />
        <style type="text/css">
            div.map {
                float:left;
                text-align: center;
                border: 1px solid #666;
                background-color: #fcfcfc;
                margin: 5px;
                padding: 1em;
            }
            span.casa, span.paloma {
                font-weight: bold;
                color: red;
            }
            span.aire {
                color: blue;
            }
               
        </style>
    </head>
    <body>
       
        <h1>
            <?php

            $tamañoMapa = 10;
            $contadorRebotes = 0;
            # Posicionar la pelota
            $pelotaY = rand (0, $tamañoMapa - 1);
            $pelotaX = rand (0, $tamañoMapa - 1);
            # Con la línea precedente nos aseguramos de que la posición inicial de la paloma
            # y su casa disten como mínimo la mitad del mapa. La función abs() devuelve el valor
            # absoluto, esto es, la cifra sin signo.

            //Si la dirección es true, irá positivamente, sino, negativamente
            $direccionX = true;
            $direccionY = true;

            do {

                do {

                    if ($pelotaX >= 9) {
                        $pelotaX--;
                        $direccionX = !$direccionX;
                        break;
                    }

                    if ($pelotaX <= 0) {
                        $pelotaX++;
                        $direccionX = !$direccionX;
                        break;
                    }

                    if ($pelotaY >= 9) {
                        $pelotaY--;
                        $direccionY = !$direccionY;
                        break;
                    }

                    if ($pelotaY <= 0) {
                        $pelotaY++;
                        $direccionY = !$direccionY;
                        break;
                    }

                    if ($direccionX) {
                        $pelotaX++;
                    } else {
                        $pelotaX--;
                    }
                    
                    if ($direccionY) {
                        $pelotaY++;
                    } else {
                        $pelotaY--;
                    }

                    #Mostrar el mapa actual
                    echo '<div class="map" style="width: ' . $tamañoMapa . 'em;"><pre>';
                    # Recuérdese que con la etiqueta <pre> los saltos de línea que haya se reflejan en la pantalla

                    for ($y = 0; $y < $tamañoMapa; $y++) {
                        for ($x = 0; $x < $tamañoMapa; $x++) {
                            if ($x == $pelotaX && $y == $pelotaY) {
                                echo '<span class="paloma">O</span>'; #Pelota
                            } else {
                                echo '<span class="aire">.</span>'; #Aire
                            }
                            echo ($x != $tamañoMapa - 1) ? " " : ""; #Siempre se añade un carácter de espacio en cada celda, salvo al final.
                        }
                        echo "\n"; #Salto de línea. como se está dentro de un <pre>, se reflejará en la pantalla.
                    }

                    echo "</pre>Pelotax=$pelotaX PelotaY=$pelotaY\nRebotes=$contadorRebotes</div>";
                    

                } while(true);
                
                $contadorRebotes++;

            } while ($contadorRebotes < 6);
          
            ?>   
           
        </h1>
       
    </body>

</html>