<html>

<head>

</head>
    <body>
       
        <h1>
            <?php    
                $numero1 = 1;
                $numero2 = 1;
                echo "Comparando variables con (++\$numero1 == \$numero2++), ambos valen 1 inicialmente <br>";
                if(++$numero1 == $numero2++) {
                        echo $numero1." es igual a ".$numero2."<br>";
                } else {
                        echo $numero1." no es igual a ".$numero2."<br>";
                }
                ?>   
           
        </h1>
       
    </body>
</html>
