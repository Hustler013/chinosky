<?php
    function insertar_productos($name_producto, $descripcion, $stock, $precio, $preciod, $preciov){
        try{
            require_once('INCLUDES/funciones/conexion_bd.php'); //Llama a la cadena de conexion
            $stmt=$conn->prepare('INSERT INTO producto (nombre_producto,descripcion,stock,precio,precio_docena,precio_venta) VALUES(?,?,?,?,?,?);');
            $stmt->bind_param('ssiddd', $name_producto, $descripcion, $stock, $precio, $preciod, $preciov);//match entre los parametros y la sentencia html
            $stmt->execute();
            $stmt->close();
            $conn->close();
            echo 'Registro exitoso';
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }

    function actualizarD($id,$name_producto, $descripcion, $stock, $precio, $preciod, $preciov){
        try {
            include 'INCLUDES/funciones/conexion_bd.php'; //Llama a la cadena de conexión
            mysqli_query($conn, "UPDATE producto set nombre_producto='$name_producto',descripcion='$descripcion',stock='$stock',precio='$precio',precio_docena='$preciod',precio_venta='$preciov' WHERE id= '".$id."'")
            or die ("Error de conexion");
            mysqli_close($conn);
            echo "Datos actualizados correctamente";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
?>