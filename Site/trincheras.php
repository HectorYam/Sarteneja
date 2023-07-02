<?php
session_start();

include("../php/config.php");
if (!isset($_SESSION['valid'])) {
    header("Location: index.php");
}

include "../config/conexion.php";
$sql = "SELECT * FROM trincheras";
$resultado = mysqli_query($conexion,$sql);


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Panel de Abministracion Sartenejas</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="../principal.php">Grutas Sartenejas III</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="../php/logout.php">Cerrar Sesion</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Centro</div>
                        <a class="nav-link" href="../principal.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Pagina Principal
                        </a>
                        <div class="sb-sidenav-menu-heading">Interfaces</div>
                        <a class="nav-link" href="../inicio.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Inicio
                        </a>
                        <a class="nav-link" href="../comentarios.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Comentarios
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Grutas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../grutas/trincheras.php">Trincheras</a>
                                <a class="nav-link" href="../grutas/murcielago.php">Murciélago</a>
                                <a class="nav-link" href="../grutas/platanal.php">El platanal</a>
                                <a class="nav-link" href="../grutas/xmait.php">X'mait</a>

                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Gastronomia
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseOne" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="../gastronomia/bebidas.php">Bebidas</a>
                                <a class="nav-link" href="../gastronomia/comidas.php">Comidas</a>
                                <a class="nav-link" href="../gastronomia/postres.php">Postres</a>
                            </nav>
                        </div>
                    </div>

                    </div>

            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <center>
                        <h1 class="mt-4">Gruta Trincheras</h1>
                    </center>
                    <div class="container-fluid px-4">
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><a href="../principal.php">Menu Principal</a></li>
                            <li class="breadcrumb-item"><a>Trincheras</a></li>
                        </ol>
                    </div>
            </main>
            <div class="container">
                <a href="../Site/trincheras/agregar.php" class="btn btn-danger">Agregar</a>
            </div>
            <br>
            <div class="container bg-light p-3 border border-dark rounded">
                        <?php  foreach($resultado as $row){ ?>


                        <div class="card" style="width: 18rem;">
                        <img src="img/<?php echo $row['imagen'];?>" class="card-img-top" alt="Nada">
                        <div class="card-body">
                            <!--<h5 class="card-title">Card title</h5>-->
                            <p class="card-text"><?php echo $row['descripcion'] ?>"
                            <a href="trincheras/editar.php?id=<?php echo $row["id"] ?>" class="btn btn-primary">Editar</a>
                            <a href="../Site/trincheras/funcioneliminar.php?id=<?php echo $row["id"] ?>" class="btn btn-primary">Eliminar</a>
                        </div>
                        </div>
                    <?php } ?>
                </table>
            </div>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; 2023 elaborado por Javier Hau y Hector Yam para "Grutas
                            Sartenejas"</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>