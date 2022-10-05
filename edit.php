<?php
    include("conexion1.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM sesiones WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $empresa = $row['empresa'] ;
            $fecha_antes = $row['fecha_antes'] ;
            $fecha_despues = $row['fecha_despues'] ;
            $asociado = $row['asociado'] ;
            $cointegrador = $row['cointegrador'] ;
            $sesion = $row['sesion'] ;
        }
    }

    if (isset($_POST['actualizar'])) {
        $id = $_GET['id'];
        $empresa = $_POST['empresa'];
        $fecha_antes = $_POST['fecha_antes'];
        $fecha_despues = $_POST['fecha_despues'];
        $asociado = $_POST['asociado'];
        $cointegrador = $_POST['cointegrador'];
        $sesion = $_POST['sesion'];

        $query = "UPDATE sesiones set empresa = '$empresa', fecha_antes = '$fecha_antes', fecha_despues = '$fecha_despues', asociado = '$asociado', cointegrador = '$cointegrador', sesion = '$sesion' ";
        mysqli_query($conn, $query);
        header("Location: editar.php");
    }

?>

<?php
include 'layouts/header.php';
?>

    <div class="container p-4 m-5">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                        <div class="form-group">
                            <input type="text" name="empresa" value="<?php echo $empresa ?>" class="form-control" placeholder="Empresa">
                        </div>
                        <div class="form-group">
                            <p>Fecha de inicio: </p>
                            <input type="text" name="fecha_antes" value="<?php echo $fecha_antes ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <p>Fecha final: </p>
                            <input type="text" name="fecha_despues" value="<?php echo $fecha_despues ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="asociado" value="<?php echo $asociado ?>" class="form-control" placeholder="Asociado">
                        </div>
                        <div class="form-group">
                            <input type="text" name="cointegrador" value="<?php echo $cointegrador ?>" class="form-control" placeholder="Cointegrador">
                        </div>
                        <div class="form-group">
                            <input type="text" name="sesion" value="<?php echo $sesion?>" class="form-control" placeholder="session">
                        </div>
                        <button class="btn btn-success" name="actualizar">
                            Actualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php
include 'layouts/footer.php';
?>