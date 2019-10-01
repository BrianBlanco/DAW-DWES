<html>

<head>

</head>
    <body>
       
        <h1>
            <?php    
                $numero = 1;
                echo "El número es: ".$numero."<br>";

                $numero++;
                
                echo "Lo operamos con '\$numero++' y da: ".$numero."<br>";
                ++$numero;

                echo "Lo operamos con '++\$numero' y da: ".$numero."<br>";
                $numero += 1;
                
                echo "Lo operamos con '\$numero += 1' y da: ".$numero."<br>";
                ?>   
           
        </h1>
       
    </body>
</html>
