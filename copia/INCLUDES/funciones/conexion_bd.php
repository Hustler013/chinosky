<?php
    $servidor='localhost';
    $usuario= 'root';
    $clave= '';
    $bbdd= 'practica9';
    $conn = mysqli_connect($servidor, $usuario, $clave, $bbdd) or die(mysqli_error());
?>