<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Total de ventas y gastos</title>
  </head>
  <body>
    <table border="1px">
    <?php
      $conexion = new mysqli("localhost", "root", "", "beneficios");
      if ($conexion->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
      }else{
        $ventas = $conexion->query("SELECT ventas,num_semana FROM ventas where num_semana=1");
        echo "<tr>";
        echo "<td>";
        echo "Ventas semana 1";
        echo "</td>";
        echo "</tr>";
        $benv1=0;
        while ($totalv = $ventas->fetch_assoc()) {
          $benv1=$benv1+$totalv["ventas"];
          echo "<td>";
          echo $totalv["ventas"];
          echo "</td>";
          echo "</tr>";
        }
        echo "</table>";
        ?>
        <table border="1px">
        <?php

        $gastos1 = $conexion->query("SELECT gasto,num_semana FROM gastos where num_semana=1");
        echo "<tr>";
        echo "<td>";
        echo "Gastos semana 1";
        echo "</td>";
        echo "</tr>";

        $beng1=0;
        while ($totalg1 = $gastos1->fetch_assoc()) {
          $beng1=$beng1+$totalg1["gasto"];
          echo "<td>";
          echo $totalg1["gasto"];
          echo "</td>";
          echo "</tr>";
        }
        echo "<br>";
        echo "<table border=1px>";
        echo "<br>";
        echo "<tr>";
        echo "<td>";
         echo"El beneficio de la semana 1 es:".$beneficio1=$benv1-$beng1;
         echo "</td>";
         echo "</tr>";
    }
    ?>
  </body>
</html>
