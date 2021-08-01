<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Ejemplo 1 PHP</title>
      <link rel="stylesheet" href="CSS/style.css">
  </head>

  <?php
    function cargarP(){
      try{
          require_once('INCLUDES/funciones/conexion_bd.php'); //Llama a la cadena de conexion
          $query='SELECT *FROM producto';
          $resultado = $conn->query($query);//carga resultados obtenidos
          $conn->close();
      }
      catch(Exception $e){
          echo $e->getMessage(); //Error por la conexion o consulta
      }
      $productos = array();
      while($producto=$resultado->fetch_assoc()){
          $productos [] = $producto;
      }
      return $productos;//Envia los datos de la primera fila
  }
  ?>
  

  <body>
    <section class="bloque">
      <?php include_once 'INCLUDES/templates/header.php'?>
      <main class="principal centrar">
        <pre class="info">
          <div class="carga-productos">
            <center><h2>TABLA PRODUCTOS</h2></center>
            <table border="1">
              <tr id="tabla_productos">
              <tr>
                <?php
                  $productos=cargarP();
                    foreach($productos as $producto){
                      echo '<tr>';
                    foreach($producto as $elemento){
                      echo '<td>'.$elemento .'</td>';
                    }
                      echo '</tr>';
                    }
                ?>
            </table>
          </div>
        </pre>
      </main>
    </section>
  </body>

  <script src="JS/principal.js" type="text/javascript"></script>
  <script src="JS/script_visualizar.js"></script>
</html>