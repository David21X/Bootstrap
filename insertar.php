<?php
include("conexion1.php");

if(isset($_POST['guardar_sesion'])){
    $seleccion = $_POST['empresa'];
    $fecha_de_inicio = $_POST['fecha_antes'];
    $fecha_del_final = $_POST['fecha_despues'];
    $seleccion_asociado = $_POST['asociado'];
    $seleccion_cointegrador = $_POST['cointegrador'];
    $tipo_sesion = $_POST['sesion'];

    $fecha_inicial = new datetime($fecha_de_inicio);
    $fecha_final = new datetime($fecha_del_final);

    $fecha_total = $fecha_inicial->diff($fecha_final);
    $hora_final= printf('%d años, %d meses, %d días, %d horas, %d minutos', $fecha_total->y, $fecha_total->m, $fecha_total->d, $fecha_total->h, $fecha_total->i);

    $query = "INSERT INTO sesiones(empresa, fecha_antes, fecha_despues, asociado, cointegrador, sesion, fecha_total) VALUES
     ('$seleccion', '$fecha_de_inicio', '$fecha_del_final', '$seleccion_asociado', '$seleccion_cointegrador', '$tipo_sesion', '$hora_final')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed");
    }

    header("Location: principal.php");
}

?>