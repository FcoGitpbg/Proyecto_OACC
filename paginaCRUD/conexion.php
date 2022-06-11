<?php

function conectar()
{
    $host="localhost";
    $user="root";
    $password="";
    $dataBase="proyecto";

    $con = mysqli_connect($host,$user,$password,$dataBase);

    return $con;
}

?>