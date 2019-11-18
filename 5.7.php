<html>

<head>
    <style>
    table  {
        border-collapse: collapse;
        border: 1px solid red;
        
    }

    th {
        border: 1px solid red; 
    }

    td {
        border: 1px solid red;
        font-size: 50px;
    }

    </style>
</head>
    <body>
        <table>
            <?php
                $anterior = 0;
                $aux = 1;

                for ($i = 1; $i <= 10; $i++) {
                    echo "<tr>";

                    $resultado = $anterior + $aux;
                    
                    echo "<td>Posición: $i valor: $resultado</td>";
                    
                    $aux = $anterior;
                    $anterior = $resultado;
                    echo "</tr>";
                }
            ?>
        </table>
    
       
    </body>
</html>
