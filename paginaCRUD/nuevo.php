<?php

    include("conexion.php");
    $con = conectar();

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];

    $sql = "INSERT INTO usuarios(nombre, apellidos, correo) VALUES ('$nombre','$apellidos','$correo')";
    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location:usuarios.php");
    }else{
        echo "Error al realizar la incersión";
    }

?>