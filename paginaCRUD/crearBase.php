<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
$sql = "CREATE DATABASE proyecto";

if ($conn->query($sql) === TRUE) {
  echo "Base de datos creada correctamente";
} else {
  echo "Error creando la base de datos: " . $conn->error;
}

$conn->close();

$dataBase = "proyecto";
$con = mysqli_connect($servername,$username,$password,$dataBase);

$sql = "CREATE TABLE usuarios (
    id_usuario int(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    correo VARCHAR(50) NOT NULL
)";

$query = mysqli_query($con,$sql);

$con->close();

?>