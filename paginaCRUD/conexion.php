<?php

function conectar()
{
    $host="localhost";
    $user="root";
    $password="";
    $dataBase="empleados";

    $con = mysqli_connect($host,$user,$password,$dataBase);

    return $con;
}

?>
