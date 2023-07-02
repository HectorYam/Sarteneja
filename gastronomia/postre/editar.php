<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<?php
include "../config/conexion.php";
$id = $_REQUEST['id'];
$sql = "SELECT * FROM postres WHERE id = $id";
$resultado = $conexion->query($sql);
$fila = $resultado->fetch_assoc();
?>
<div class="container">
    <br>
    <center>
        <h1>
            Editar Datos
        </h1>
    </center>
    <form action="../postre/funcioneditar.php?idEditar=<?php echo $fila["id"] ?>" method="POST"
        enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="Descripcion" value="<?php echo $fila["descripcion"] ?>">
        </div>
        <td><img style="width: 200px;" src="data:image/jpg;base64, <?php echo base64_encode($fila['imagen']) ?>" alt="">
        </td>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Imagen</label>
            <input type="file" class="form-control" name="Imagen">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="postres.php" class="btn btn-info">Regresar</a>
    </form>

</div>

<body>

</body>

</html>