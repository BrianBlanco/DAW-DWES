<html>
    <body>
        <?php
        if (empty($_POST["nombre"])) {
            echo "No se ha escrito un nombre";
        } else {
            echo "Bienvenid@ ";
            echo $_POST["nombre"];
        }
        ?>
    </body>
</html>