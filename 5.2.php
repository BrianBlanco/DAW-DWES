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

                while ($h <= 10) {
                    echo "<td>tabla del $h</td>";
                    $h++;
                }

                echo "</tr>";

                echo "</thead>";
                
                while ($i <= 10) {
                    $k = 1;
                    echo "</tr>";
                    
                    while ($k <= 10) {
                        echo "<td>".$i * $k ."</td>";
                        $k++;
                    }

                    echo "</tr>";    
                    $i++;

                }

                echo "</table>";
            ?>
       
    </body>
</html>
