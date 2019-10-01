<html>

<head>

</head>

<body>
        <h1>
                <?php

                        echo "Día: 6am-14pm<br>";
                        echo "Tarde: 14pm-00am<br>";
                        echo "Noche: 00am-6am<br><br>";

                        $hora = date("G");

                        if($hora > 6 && $hora < 14) {
                                echo "Buenos días";
                        } elseif ($hora > 14 && $hora < 24) {
                                echo "Buenas tardes";
                        } elseif ($hora > 0 && $hora < 6) {
                                echo "Buenas noches";
                        }
                ?>

        </h1>

</body>

</html>