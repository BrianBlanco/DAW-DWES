<html>

<body>
    <?php
    if (!isset($_POST["nombre"])) {

        ?>
        
        <p>Dime tu nombre:</p>
        <form action="Ej3.php" method="POST">
            <input type="text" name="nombre" id="nombre">
            <input type="submit" name="submit" id="submit">
        </form>

    <?php

    } else {


        if (empty($_POST["nombre"])) {
            echo "No se ha escrito un nombre";
        } else {
            echo "Bienvenid@ ";
            echo $_POST["nombre"];
        }
    }

    ?>
</body>

</html>