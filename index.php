<?php
  require("clases/claseTablaMultiplicar.php");
?>
<html>
  <head>
      <?php
        require("includes/head.php");
      ?>
  </head>
  <body>
      <p>Generar Tabla</p>
      <form method="post" action="index.php">
        <label>Numero de Tabla:
          <input type="text" name="numero">
        </label>
        <input type="submit" value="Generar Tabla">
      </form>
      <?php
        if($_POST){
          $numero = $_POST["numero"];
          $objeto = new claseTablaMultiplicar();
          $objeto->establecerNumeroTabla($numero);
          $objeto->generarTabla();
          echo $objeto->obtenerResultado();
        }
      ?>
  </body>
</html>
