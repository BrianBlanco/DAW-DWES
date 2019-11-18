<html>

<head>
    <style>
    
    table  {
        border-collapse: collapse;
        border: 1px solid black;
        width: auto;
    }

    th {
        border: 1px solid black;
    }

    td {
        border: 1px solid black;
    }

    table * {
        padding: 2%;
    }
    
    td:nth-child(odd) {
        background-color: aquamarine;
    }

    td:nth-child(even) {
        background-color: mediumaquamarine;
    }

    </style>
</head>
    <body>
            <?php
                $i = 1;
                $h = 1;

                echo "<table>";
                echo "<thead>";
                echo "<tr>";

                do {
                    echo "<td>tabla del $h</td>";
                    $h++;
                } while ($h <= 10);

                echo "</tr>";

                echo "</thead>";
                
                do {
                    $k = 1;
                    echo "</tr>";
                    
                    do {
                        echo "<td>".$i * $k ."</td>";
                        $k++;
                    } while ($k <= 10);

                    echo "</tr>";    
                    $i++;

                } while ($i <= 10);

                echo "</table>";
            ?>
       
    </body>
</html>
