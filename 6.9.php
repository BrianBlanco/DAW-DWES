<html>
   
    <head>
        <link rel="stylesheet" type="text/css" media="screen" />
        <meta charset="UTF-8">


    </head>
 
    <body>
 
            <?php

        $cadena = "briangiannoni@gmail.com";


       if (substr($cadena, -4, 4) && strstr($cadena,".com")) {
        echo "El correo contiene el .com";
       }else {
        echo "El correo no contiene el .com";
       }
      
             
            ?>    
    </body>
</html>





