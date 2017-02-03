<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <?php
    $conexion = new mysqli("localhost", "root", "", "beneficios");
    if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
    }else{
      }
     ?>
     <h1>Base de datos de Beneficios</h1>
     <h3><em><a href="total.php">El total</a></em></h3>
     <h3><em><a href="ben_1.php">Beneficios 1</a></em></h3>
     <h3><em><a href="ben_2.php">beneficios 2</a></em></h3>
   
  </body>
</html>
