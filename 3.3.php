<html>

<head>

</head>
    <body>
       
        <h1>
            <?php    
                $numero1 = 1;
                $numero2 = 2;

                if($numero1 == $numero2) {
                        echo $numero1." es igual a ".$numero2."<br>";
                } else {
                        echo $numero1." no es igual a ".$numero2."<br>";
                }

                if($numero1 > $numero2) {
                        echo $numero1." es mayor que ".$numero2."<br>";
                } elseif($numero1 <= $numero2) {
                        echo $numero1." es menor que ".$numero2."<br>";
                }

                if ($numero1 <= $numero2) {
                        echo $numero1." es menor o igual que ".$numero2."<br>";
                } else {
                        echo $numero1." no es menor o igual que ".$numero2."<br>";
                }

                if($numero1 != $numero2) {
                        echo $numero1." no es igual a ".$numero2."<br>";
                }

                
                
                
                




                echo ""."<br>";

                ?>   
           
        </h1>
       
    </body>
</html>
