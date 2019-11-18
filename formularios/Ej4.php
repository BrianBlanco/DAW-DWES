<html>

<body>
    <?php
    if (!isset($_POST["resultado"])) {

        ?>
        
        
        <form action="Ej4.php" method="POST">
            <label for="">Primer Número</label>
            <input type="text" name="num1" id="num1">
            <br>

            <select name="operador" id="">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <br>
            <label for="">Segundo Número</label>
            <input type="text" name="num1" id="num1">
            <br>
            <input type="submit" name="submit" id="submit">
        </form>

    <?php

    } else {
        
        if (empty($_POST["resultado"])) {
            echo "No se ha escrito un nombre";
        } else {
            echo "Bienvenid@ ";
            echo $_POST["nombre"];
        }
    }

    ?>
</body>

</html>