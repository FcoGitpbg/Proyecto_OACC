<?php

$host="localhost";
$user="root";
$password="";
$dataBase="proyecto";

$con = mysqli_connect($host,$user,$password,$dataBase);

if($con)
{
    echo "Conexión establecida";
}else{
    echo "Fallo en la conexión";
}

?>