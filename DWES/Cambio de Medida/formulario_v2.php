<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Cambio de medidas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="" title="Color">
</head>

<body>
  <h1>Conversor de distancias.</h1>

  <form action="operacion_v2.php" method="get" accept-charset="utf-8">
    <p>
      <label for="numero">Quiero convertir:</label> 
      <input type="number" name="numero">

      <select name="medidaI">
        <option value="km">km</option>
        <option value="m" Selected>m</option>
        <option value="cm">cm</option>
      </select>
      <span>a</span>
      <select name="medidaF">
        <option value="" selected hidden disabled></option>
        <option value="km">km</option>
        <option value="m">m</option> <!-- Selected se utiliza para que esta oppcion este ya seleccionada automaticamente  -->
        <option value="cm">cm</option>
      </select>
    </p>

    <p>
      <input type="submit" value="Convertir">
      <input type="reset">
    </p>
  </form>

  <p>
    <?php
    if(isset($_GET["numero"]) && isset($_GET["medidaI"]) && isset($_GET["medidaF"]) && isset($_GET["resultado"])){
      $valor = $_GET["numero"];
      $medidaI = $_GET["medidaI"];
      $medidaF = $_GET ["medidaF"];
      $resultado = $_GET["resultado"];
      echo "El resultado de convertir $valor $medidaI a $medidaF es: $resultado $medidaF.";
    }
    
    ?>
  </p>
</body>
</html>