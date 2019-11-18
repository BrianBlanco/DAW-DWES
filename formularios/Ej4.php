<html>

<body>


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
            <input type="text" name="num2" id="num2">
            <br>
            <input type="submit" name="submit" id="submit">
        </form>

    <?php


        $num1 = $_POST["num1"];
        $operador = $_POST["operador"];
        $num2 = $_POST["num2"];

        switch ($operador) {
            case '+':
            $resultado = $num1 + $num2;
                break;

            case '-':
            $resultado = $num1 - $num2;
                break;

            case '*':
            $resultado = $num1 * $num2;
                break;

            case '/':
            $resultado = $num1 / $num2;
                break;
        }
        
        echo $resultado;
        
    

    ?>
</body>

</html>