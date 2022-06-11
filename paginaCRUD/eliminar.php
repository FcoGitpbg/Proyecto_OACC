<?php

    include("conexion.php");
    $con = conectar();

    $id = $_GET['sus'];

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];

    $sql = "DELETE FROM usuarios WHERE id_usuario = '$id' ";
    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location:usuarios.php");
    }else{
        echo "Error al realizar la incersión";
    }

?>