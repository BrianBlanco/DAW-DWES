<html>

<head>
    
</head>
    <body>
       
        <h1>
            <?php
                $año = 2001;

                if ($año % 4 == 0) {
                    if ($año % 400 == 0) {
                        echo "Es bisiesto";
                    } else {
                        if ($año % 100 != 0) {
                            echo "Es bisiesto";
                        } else {
                            echo "No es bisiesto";
                        }
                    }
                } else {
                    echo "No es bisiesto";
                }
           
            ?>   
           
        </h1>
       
    </body>
</html>
