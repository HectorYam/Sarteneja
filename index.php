<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Inicio de Sesion</title>
</head>

<body>
    <div class="container">

        <div class="box form-box">
            <?php

            include("php/config.php");
            if (isset($_POST['submit'])) {
                $email = mysqli_real_escape_string($con, $_POST['email']);
                $password = mysqli_real_escape_string($con, $_POST['password']);

                $result = mysqli_query($con, "SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if (is_array($row) && !empty($row)) {
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['age'] = $row['Age'];
                    $_SESSION['id'] = $row['Id'];
                } else {
                    echo "<div class='message'>
                      <p>Nombre de usuario o contraseña incorrectos</p>
                       </div> <br>";
                    echo "<a href='index.php'><button class='btn'>Regresar</button>";

                }
                if (isset($_SESSION['valid'])) {
                    header("Location: principal.php");
                }
            } else {


                ?>

                <center>
                    <header>Inicio de Sesion</header>
                </center>
                <center><a class="original-logo"><img src="images/logo.png" width="215" height="260"
                            style="padding: 50px 10px 0px 5px;"></a></center>
                <form action="" method="post">

                    <div class="field input">
                        <label for="email">Correo Electronico</label>
                        <input type="email" name="email" id="email" autocomplete="off" required>
                    </div>

                    <div class="field input">
                        <label for="password">Contraseña</label>
                        <input type="text" name="password" id="password" autocomplete="off" required>
                    </div>

                    <div class="field">

                        <input type="submit" class="btn" name="submit" value="Iniciar sesion" required>
                    </div>
                    <div class="links">
                        <!-- ¿No tienes cuenta? <a href="register.php">Regístrate ahora</a> -->
                    </div>
                </form>
            </div>
        <?php } ?>
    </div>
</body>

</html>