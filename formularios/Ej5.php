<html>

<body>

    <?php
    if (!isset($_POST["oculto"])) {

        ?>

        <form action="Ej5.php" method="POST">
            <label for="">Nombre:</label>
            <input type="text" name="nombre" required>
            <input type="hidden" name="oculto" value="0">
            <br>
            <input type="submit" name="submit" id="submit">
        </form>

    <?php
    } else if ($_POST["oculto"] == 0) {
        $nombre = $_POST["nombre"];
        ?>

        <form action="Ej5.php" method="POST">
            <label for="">Modelo de coche:</label>
            <input type="text" name="coche" id="coche">
            <input type="hidden" name="oculto" value="1">
            <input type="hidden" name="hiddenName" value="<?php echo $nombre?>">
            <br>
            <input type="submit" name="submit" id="submit">
        </form>


    <?php
    } else if ($_POST["oculto"] == 1) {
        $nombre = $_POST["hiddenName"];
        $coche = $_POST["coche"];
        
            echo "Buenos días " . $nombre . ", su coche es: " . $coche . "";
        
    }
    ?>

</body>

</html>