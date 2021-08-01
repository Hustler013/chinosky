<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrar Producto</title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>

    <?php
        //DECLARACIONES
        require_once('INCLUDES/funciones/consultas.php');
        //VARIABLES
        $producto=''; $descripcion='';$stock='';$precio=''; $preciod=''; $preciov=''; 
        //Funciones para verificar que no exista código malicioso <h1> hola </h1>
        function box_input($data){
            $data= trim($data);
            $data= stripcslashes($data);
            $data= htmlspecialchars($data);
            $data= filter_var($data, FILTER_SANITIZE_STRING);
            return $data;
        };
    ?>

    <body>
        <section class="bloque">
            <?php include_once 'INCLUDES/templates/header.php'?>
            <main class="principal centrar">
                <div class="formulario">
                    <form action="<?php $_SERVER["PHP_SELF"] ?>"method="POST">
                        <div id="componentes"></div>
                        <?php
                            if($_SERVER["REQUEST_METHOD"]=="POST"){
                                if(empty($_POST['producto']) && empty($_POST['descripcion']) && empty($_POST['stock']) && empty($_POST['precio'])
                                && empty($_POST['preciod']) && empty($_POST['preciov'])){
                                    echo '<p class="error"> Los campos estan vacios</p>';
                                }
                                else{
                                    $producto=box_input( $_POST['producto']);
                                    $descripcion=box_input( $_POST['descripcion']);
                                    $stock= box_input($_POST['stock']) ;
                                    $precio= box_input($_POST['precio']) ;
                                    $preciod= box_input($_POST['preciod']) ;
                                    $preciov= box_input($_POST['preciov']) ;
                                    insertar_productos($producto, $descripcion, $stock, $precio, $preciod, $preciov); 
                                }
                            }
                        ?>
                    </form>
                </div>
            </main>
        </section>
    </body>

    <script src="JS/script_registrar.js" type="text/javascript"></script>
    <script src="JS/principal.js" type="text/javascript"></script>
</html>