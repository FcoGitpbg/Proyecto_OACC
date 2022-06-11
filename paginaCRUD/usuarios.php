<?php
    include("conexion.php");
    $con = conectar();

    $sql = "SELECT * FROM usuarios";
    $query = mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>Usuarios</title>
</head>
<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <form action="nuevo.php" method="POST">
                    <div class="font-weight-bold font-italic" style="text-align:center;">Agregar Usuario</div>
                    <br>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                        <label for="apellidos">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo">
                    </div>
                    <button type="submit" class="btn btn-info">Agregar Usuario</button>
                </form>
            </div>
            <div class="col-lg">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Correo</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($query as $val){ ?>
                            <tr>
                            <td><?php echo $val['id_usuario'] ?></td>
                            <td><?php echo $val['nombre'] ?></td>
                            <td><?php echo $val['apellidos'] ?></td>
                            <td><?php echo $val['correo'] ?></td>
                            <td><a href="actUsuario.php?sus=<?php echo $val['id_usuario']?>" name="actualizar" class="btn btn-success">Editar</a></td>
                            <td><a href="eliminar.php?sus=<?php echo $val['id_usuario']?>" name="delete" class="btn btn-danger">Eliminar</a></td>
                            
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>