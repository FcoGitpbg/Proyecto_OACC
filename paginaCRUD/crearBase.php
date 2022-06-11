<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
$sql = "CREATE DATABASE empleados";

$conn->query($sql)


$conn->close();

$dataBase = "empleados";
$con = mysqli_connect($servername,$username,$password,$dataBase);

$sql = "CREATE TABLE clientes (
    id_cliente int(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    estadoSuscripción VARCHAR(20) NOT NULL,
    clienteFrecuente VARCHAR(2) NOT NULL
)";

$query = mysqli_query($con,$sql);

$con->close();

?>
