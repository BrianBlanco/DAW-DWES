<html>

<head>
  <meta charset="UTF-8">
</head>

<body>

  <?php

  $cadena = " Cuando los árboles crecen, el cielo se encapota";
  $valor = " el ";
  $posicion = strpos($cadena, $valor);
  echo "La cadena original es: $cadena<br>";

  while ($posicion) {

    if (!strpos($cadena, $valor)) {
      $posicion = false;
      $cadena = substr($cadena, $posicion + 1, strlen($cadena));
      echo ("La cadena final es: ".$cadenaFinal.$cadena);
    } else {
      $posicion = strpos($cadena, $valor);
      $cadenaFinal = $cadenaFinal . substr($cadena, 0, $posicion)." the ";
      $cadena = substr($cadena, $posicion + 3, strlen($cadena));
    }
  }

  ?>

</body>

</html>