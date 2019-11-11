<html>

<head>

    <style>
        table, th, td {
            border: 1px solid blue;
            border-collapse: collapse;
        }
        th {
            background-color: yellow;
        }
        td {
            background-color: red;
        }
    </style>
</head>

<body>



    <h1>
        <?php
        $cadena = strtolower("Aguacate");
        $arrayConLetras = "abcdefghijklmnopqrstuvwxyz";
        $arrayConNumeros = array();

        for ($i = 0; $i < strlen($arrayConLetras); $i++) { 
            $arrayConNumeros[$i] = 0;
        }

        echo "<table>";
        
        for ($i = 0; $i < strlen($cadena); $i++) {
            $pos = strpos($arrayConLetras, $cadena[$i]);
            $arrayConNumeros[$pos]++;
        }

        for ($i = 0; $i < strlen($arrayConLetras); $i++) { 
            echo "<th>".$arrayConLetras[$i]."</th>";
        }

        echo "<tr>";
        for ($i = 0; $i < strlen($arrayConLetras); $i++) { 
            echo "<td>".$arrayConNumeros[$i]."</td>";
        }
        echo "</tr>";
        echo "</table>";


        ?>



    </h1>



</body>


</html>