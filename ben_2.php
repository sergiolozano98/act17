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
        $ventas = $conexion->query("SELECT ventas,num_semana FROM ventas where num_semana=2");
        echo "<tr>";
        echo "<td>";
        echo "Ventas semana 2";
        echo "</td>";
        echo "</tr>";

        $benv2=0;
        while ($totalv = $ventas->fetch_assoc()) {
          $benv2=$benv2+$totalv["ventas"];

          echo "<td>";
          echo $totalv["ventas"];
          echo "</td>";
          echo "</tr>";

        }
        echo "</table>";
        ?>
      </td>
    </tr>
      <table border="1px">
        <?php
        $gastos2 = $conexion->query("SELECT gasto,num_semana FROM gastos where num_semana=2");
        echo "<tr>";
        echo "<td>";
        echo "Gastos semana 2";
        echo "</td>";
        echo "</tr>";
        echo "<br>";
        $beng2=0;
        while ($totalg2 = $gastos2->fetch_assoc()) {
          $beng2=$beng2+$totalg2["gasto"];
          echo "<td>";
          echo $totalg2["gasto"];
          echo "</td>";
          echo "</tr>";

        }
        echo "<table border=1px>";
        echo "<br>";
        echo "<tr>";
        echo "<td>";
        echo"El beneficio de la semana 2 es:".$beneficio2=$benv2-$beng2;
        echo "</td>";
        echo "</tr>";
    }
    ?>
  </body>
</html>
