<html>

<head>
    <style>
    
    table  {
        border-collapse: collapse;
        border: 1px solid red;
        width: 20%;
    }

    th {
        border: 1px solid red; 
    }

    td {
        border: 1px solid red;
        }

    </style>
</head>
    <body>
       
            <?php
                echo "<table>";
                for ($i = 1; $i <= 10; $i++) {
                    echo "<tr><th>El número $i</th>";

                    echo "<td>";

                    if ($i % 2 == 0) {
                        echo "Es par";
                    } else {
                        echo "Es impar";
                    }

                    echo "</td><td>";
                                        
                    if (primo($i)) {
                        echo "Es primo";
                    } else {
                        echo "No es primo";
                    }

                    echo "</td></tr>";

                }

                echo "</table>";
                
                function primo($num) {
                        $cont=0;
                        
                        for($i = 2; $i <= $num; $i++) {
                            if($num%$i==0) {
                                
                                if(++$cont > 1)
                                    return false;
                            }
                        }
                        
                        return true;
                    }
            ?>
       
    </body>
</html>
