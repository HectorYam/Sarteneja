<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
  <h1 class="bg-warning p-2 text-white text-center">Agregar</h1>
    <br>
    <div class="container">
    <form action="../crud/insertar.php" method="POST">
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="Nombre Usuario" name="Nombre">
  </div>
  <div class="mb-3">
    <input type="text" class="form-control" placeholder="Comentario" name="Comentarios">
  </div>
  <div class="container text-center">
  <button type="submit" class="btn btn-primary">Agregar</button>
  <a href="../principal.php" class="btn btn-dark">Regresar</a>
  </div>
  
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>