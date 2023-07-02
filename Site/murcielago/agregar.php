<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Agregar</title>
</head>

<body>
    <div class="container">
        <h1>Agregar Nuevo Datos</h1>
        <br>
        <form action="../murcielago/funcionagregar.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Descripcion</label required>
                <input type="text" class="form-control" name="Descripcion">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Imagen</label>
                <input type="file" class="form-control" name="Imagen">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="../murcielago.php" class="btn btn-info">Regresar</a>
        </form>
    </div>
</body>

</html>