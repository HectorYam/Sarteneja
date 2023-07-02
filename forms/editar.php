<?php

include_once('../config/conexion.php');
$id = $_REQUEST['id'];

$sql = "SELECT * FROM comentarios WHERE id = $id";
$query = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($query);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <h1 class="bg-warning p-2 text-white text-center">Editar</h1>
    <br>
    <div class="container">
    <form action="../crud/editar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $fila['id'] ?>">
  <div class="mb-3">
  <label class="form-label">Nombre</label>
    <input type="text" class="form-control" placeholder="Nombre Usuario" name="Nombre" value="<?php echo $fila['Nombre'] ?>">
  </div>
  <div class="mb-3">
  <label class="form-label">Comentario</label>
    <input type="text" class="form-control" placeholder="Comentario" name="Comentarios" value="<?php echo $fila['Comentarios'] ?>">
  </div>
  <div class="container text-center">
  <button type="submit" class="btn btn-primary">Editar</button>
  <a href="../principal.php" class="btn btn-dark">Regresar</a>
  </div>
</form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>