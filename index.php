<?php

    require "conexion.php";

    session_start();

    if($_POST){
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        $sql = "SELECT id, password, nombre, tipo_usuario FROM usuarios WHERE usuario = '$usuario' ";
        $resultado = $mysqli->query($sql);
        $num = $resultado->num_rows;

        if($num>0) {

            $row = $resultado->fetch_assoc();
            $password_bd = $row['password'];

            $pass_c = sha1($password);

            if($password_bd == $pass_c){

                $_SESSION['id'] =  $row ['id'];
                $_SESSION['nombre'] =  $row ['nombre'];
                $_SESSION['tipo_usuario'] =  $row ['tipo_usuario'];

                header("Location: principal.php");

            } else {
                echo "Contraseña no coincide";
            }


        } else{
            echo "No existe el usuario";
        }
    }


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap Local -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container rounded d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="row bg-dark border-3 rounded">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-8 py-4 ps-4" >
                <img src="img/fondo_login.jpg" class="img-fluid rounded" alt="...">
            </div>
            <div class="align-self-center col-sm-6 col-md-6 col-lg-6 col-xl-4 pe-4">
                <h1 class="text-center pb-5 py-2 rounded text-light">Iniciar sesión</h1>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="mb-3">
                                <label for="usuario" class="form-label text-light">Usuario:</label>
                                <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Ingresa tu usuario">
                           </div>
                           <div class=" mb-3">
                              <label for="contraseña" class="form-label text-light">Contraseña</label>
                              <input type="password" name="password" class="form-control" id="contraseña" placeholder="Ingresa tu contraseña">
                             </div>
                          <div class="py-2 d-grid gap-2 d-flex justify-content-center">
                              <button class="btn btn-primary w-75 ">ACCEDER</button>
                          </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>