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

            $tamañoMapa=10;
           
            # Posicionar la paloma
           
            do
            {
                $casaX = rand (0,$tamañoMapa-1);
                $casaY = rand (0,$tamañoMapa-1);
                $palomaX = rand (0,$tamañoMapa-1);
                $palomaY = rand (0,$tamañoMapa-1);

                //Segunda paloma
                $segundaPalomaX = rand (0, $tamañoMapa - 1);

                // Aseguramos que no se solape con la otra paloma
                while ($segundaPalomaX == $palomaX && $segundaPalomaY == $palomaY) {
                    $segundaPalomaX = rand (0, $tamañoMapa - 1);
                    $segundaPalomaY = rand (0, $tamañoMapa - 1);
                }

            } while (
                (abs($casaX - $palomaX) < $tamañoMapa / 2) && (abs($casaY - $palomaY) < $tamañoMapa / 2)
                &&
                (abs($casaX-$segundaPalomaX) < $tamañoMapa/2) && (abs($casaY - $segundaPalomaY) < $tamañoMapa / 2)
            );
            # Con la línea precedente nos aseguramos de que la posición inicial de la paloma
            # y su casa disten como mínimo la mitad del mapa. La función abs() devuelve el valor
            # absoluto, esto es, la cifra sin signo.
           
            do
            {
                #Acercar la paloma a su casa
                if ($palomaX < $casaX)
                    $palomaX++;
                elseif ($palomaX > $casaX)
                    $palomaX--;

                if ($palomaY < $casaY)
                    $palomaY++;
                elseif ($palomaY > $casaY)
                    $palomaY--;

                if ($segundaPalomaX < $casaX)
                    $segundaPalomaX++;
                elseif ($segundaPalomaX > $casaX)
                    $segundaPalomaX--;

                if ($segundaPalomaY < $casaY)
                    $segundaPalomaY++;
                elseif ($segundaPalomaY > $casaY)
                    $segundaPalomaY--;
                   
                #Mostrar el mapa actual
                echo '<div class="map" style="width: ' . $tamañoMapa . 'em;"><pre>';
                # Recuérdese que con la etiqueta <pre> los saltos de línea que haya se reflejan en la pantalla
               
                for ($y=0; $y<$tamañoMapa; $y++)
                {
                    for ($x=0; $x<$tamañoMapa; $x++)
                    {
                        if ($x == $casaX && $y == $casaY)
                        {
                            echo '<span class="casa">+</span>'; //Casa
                        }
                        elseif ($x == $palomaX && $y == $palomaY)
                        {
                            echo '<span class="paloma">%</span>'; #Paloma
                        }
                        elseif ($x == $segundaPalomaX && $y == $segundaPalomaY)
                        {
                            echo '<span class="paloma">%</span>'; #Paloma
                        }
                        else
                        {
                            echo '<span class="aire">.</span>'; #Aire
                        }

                        echo ($x != $tamañoMapa -1) ? " " : ""; #siempre se añade un carácter de espacio en cada celda, salvo al final.
                    }
                                       
                    echo "\n"; #Salto de línea. como se está dentro de un <pre>, se reflejará en la pantalla.
                }
               
                echo "</pre>Palomax=$palomaX PalomaY=$palomaY\n";
                echo "<pre>\n</pre>";
                echo "Paloma2x=$segundaPalomaX Paloma2Y=$segundaPalomaY</div>";
            } while (($palomaX != $casaX || $palomaY != $casaY) || ($segundaPalomaX != $casaX || $segundaPalomaY != $casaY));
          
            ?>   
           
        </h1>
       
    </body>

</html>