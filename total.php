<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Total de ventas y gastos</title>
  </head>
  <body>
    <?php
      $conexion = new mysqli("localhost", "root", "", "beneficios");
      if ($conexion->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
      }else{
        ?>
        <h3>Total de Ventas Semana 1</h3>
        <?php
        $ventas = $conexion->query("SELECT ventas,num_semana FROM ventas where num_semana=1");
        while ($totalv = $ventas->fetch_assoc()) {
          echo $totalv["ventas"];
          echo "<br>";
        }
        ?>
        <h3>Total de Gastos Semana 1</h3>
        <?php
        $gastos1 = $conexion->query("SELECT gasto,num_semana FROM gastos where num_semana=1");
        while ($totalg1 = $gastos1->fetch_assoc()) {
          echo $totalg1["gasto"];
          echo "<br>";
        }
        ?>
        <h3>Total de Ventas Semana 2</h3>
        <?php
        $ventas = $conexion->query("SELECT ventas,num_semana FROM ventas where num_semana=2");
        while ($totalv = $ventas->fetch_assoc()) {
          echo $totalv["ventas"];
          echo "<br>";
        }
        ?>
        <h3>Total de Gastos Semana 2</h3>
        <?php
        $gastos1 = $conexion->query("SELECT gasto,num_semana FROM gastos where num_semana=2");
        while ($totalg1 = $gastos1->fetch_assoc()) {
          echo $totalg1["gasto"];
          echo "<br>";
        }

    }
    ?>
  </body>
</html>
