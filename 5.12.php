<!DOCTYPE html>
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

            span.paloma2 {
                color: blue;
            }

            span.paloma3 {
                color: black;
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

            $pelotaY2 = rand (0, $tamañoMapa - 1);
            $pelotaX2 = rand (0, $tamañoMapa - 1);

            $pelotaY3 = rand (0, $tamañoMapa - 1);
            $pelotaX3 = rand (0, $tamañoMapa - 1);

            $plataforma = array(
                0 => 0,
                1 => 1,
                2 => 2,
                3 => 3,
            );

            # Con la línea precedente nos aseguramos de que la posición inicial de la paloma
            # y su casa disten como mínimo la mitad del mapa. La función abs() devuelve el valor
            # absoluto, esto es, la cifra sin signo.

            //Si la dirección es true, irá positivamente, sino, negativamente
            $direccionX = true;
            $direccionY = true;

            $direccionX2 = true;
            $direccionY2 = true;

            $direccionX3 = true;
            $direccionY3 = true;

            $direccionPlataforma = true;

            do {

                do {

                    #Mostrar el mapa actual
                    echo '<div class="map" style="width: ' . $tamañoMapa . 'em;"><pre>';
                    # Recuérdese que con la etiqueta <pre> los saltos de línea que haya se reflejan en la pantalla

                    for ($y = 0; $y < $tamañoMapa; $y++) {
                        for ($x = 0; $x < $tamañoMapa; $x++) {
                            if ($x == $pelotaX && $y == $pelotaY) {
                                echo '<span class="paloma">0</span>'; #Pelota
                            } else {
                                if ($x == $pelotaX2 && $y == $pelotaY2) {
                                    echo '<span class="paloma2">0</span>'; #Pelota2
                                } else {
                                    if ($x == $pelotaX3 && $y == $pelotaY3) {
                                        echo '<span class="paloma3">0</span>'; #Pelota3
                                    } else {
                                        if ($y == 8 && in_array($x, $plataforma)) {
                                            echo '<span class="paloma3">#</span>'; #Plataforma
                                        } else {
                                            echo '<span class="aire">.</span>'; #Aire
                                        }
                                        
                                    }
                                }
                            }
                            
                            echo ($x != $tamañoMapa - 1) ? " " : ""; #Siempre se añade un carácter de espacio en cada celda, salvo al final.
                        }
                        echo "\n"; #Salto de línea. como se está dentro de un <pre>, se reflejará en la pantalla.
                    }

                    echo "</pre>Rebotes=$contadorRebotes</div>";

                    if ($plataforma[3] >= 9) {
                        $direccionPlataforma = !$direccionPlataforma;

                    } else if ($plataforma[0] <= 0) {
                        $direccionPlataforma = !$direccionPlataforma;
                    }

                    if ($direccionPlataforma) {
                        for ($i = 0; $i < 4; $i++) {

                            $plataforma[$i] += 1;
                        }

                    } else {
                        for ($i = 0; $i < sizeof($plataforma); $i++) { 
                            $plataforma[$i] -= 1;
                        }
                    }


                    // Pelota 1
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

                    // Pelota 2

                    if ($pelotaX2 >= 9) {
                        $pelotaX2--;
                        $direccionX2 = !$direccionX2;
                        break;
                    }

                    if ($pelotaX2 <= 0) {
                        $pelotaX2++;
                        $direccionX2 = !$direccionX2;
                        break;
                    }

                    if ($pelotaY2 >= 9) {
                        $pelotaY2--;
                        $direccionY2 = !$direccionY2;
                        break;
                    }

                    if ($pelotaY2 <= 0) {
                        $pelotaY2++;
                        $direccionY2 = !$direccionY2;
                        break;
                    }

                    if ($direccionX2) {
                        $pelotaX2++;
                    } else {
                        $pelotaX2--;
                    }
                    
                    if ($direccionY2) {
                        $pelotaY2++;
                    } else {
                        $pelotaY2--;
                    }

                    // Pelota 3

                    if ($pelotaX3 >= 9) {
                        $pelotaX3--;
                        $direccionX3 = !$direccionX3;
                        break;
                    }

                    if ($pelotaX3 <= 0) {
                        $pelotaX3++;
                        $direccionX3 = !$direccionX3;
                        break;
                    }

                    if ($pelotaY3 >= 9) {
                        $pelotaY3--;
                        $direccionY3 = !$direccionY3;
                        break;
                    }

                    if ($pelotaY3 <= 0) {
                        $pelotaY3++;
                        $direccionY3 = !$direccionY3;
                        break;
                    }

                    if ($direccionX3) {
                        $pelotaX3++;
                    } else {
                        $pelotaX3--;
                    }
                    
                    if ($direccionY3) {
                        $pelotaY3++;
                    } else {
                        $pelotaY3--;
                    }

                } while(true);
                
                $contadorRebotes++;

            } while ($contadorRebotes < 18);
          
            ?>
           
        </h1>
       
    </body>

</html>