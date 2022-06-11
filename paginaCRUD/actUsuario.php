<?php

    include("conexion.php");
    $con = conectar();

    $id = $_GET['sus'];

    $sql = "SELECT * FROM clientes WHERE id_cliente = '$id' ";
    $query = mysqli_query($con, $sql);

    $val = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Editar Usuario</title>
</head>
<body>
    <div class="container">
        <form action="actualizar.php?sus=<?php echo $val['id_cliente']?>" method="POST">
            <div class="font-weight-bold font-italic" style="text-align:center;">Editar Usuario</div>
            <br>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $val['nombre'] ?>">
                <label for="apellidos">Estado Suscripción</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $val['estadoSuscripción'] ?>">
                <label for="correo">Cliente Frecuente</label>
                <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $val['clienteFrecuente'] ?>">
            </div>
            <div style="text-align:center">
            <button type="submit" class="btn btn-success">Editar Cliente</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
