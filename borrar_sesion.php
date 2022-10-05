<?php
    include("conexion1.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM sesiones WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die("Query Failed");
        }

        header("Location: editar.php");

    }

    
?>



