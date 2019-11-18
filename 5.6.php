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

                echo "<table>";
                echo "<thead>";
                echo "<tr>";

                for ($h = 1; $h <= 10 ; $h++) { 
                    echo "<td>tabla del $h</td>";
                }

                echo "</tr>";

                echo "</thead>";
                
                for ($i = 1; $i <= 10; $i++) { 
                    echo "</tr>";
                    
                    for ($k = 1; $k <= 10; $k++) { 
                        echo "<td>".$i * $k ."</td>";
                    }

                    echo "</tr>";

                }

                echo "</table>";
            ?>
       
    </body>
</html>
