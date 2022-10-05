
    <?php
        include("conexion1.php");

        include 'layouts/header.php';
    ?>

    <!-- DashBoard -->
    <div class="container">
        <div class="pt-5 " >
            <h1 class="ps-2 pt-4 pb-3 bi bi-person-lines-fill"> Clientes </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class=" col-sm-6 col-md-6 col-lg-6 col-xl-6   px-0 " style="height: 60px;">
                    <form action="nueva_sesion.php">
                            <button class="btn btn-success boton_agregar rounded-start bi bi-plus-circle-dotted" style="width: 100%; height: 100%; " >  Agregar Nueva Sesión</button>
                    </form>
                </div>
                <div class=" col-sm-6 col-md-6 col-lg-6 col-xl-6  px-0 " style="height: 60px;">
                    <form action="editar.php">
                        <button class="btn btn-primary boton_agregar rounded-end bi bi-pencil-square" style="width: 100%; height: 100%;" > Editar Sesión</button>
                    </form>
                </div>
            </div>

            <div id="galeria">
                <div >
                <h3>Selecciona al cliente para ver su información: </h3>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <img src="img/empresa_1.png" alt="">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <img src="img/empresa_2.png" alt="">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <img src="img/empresa_3.png" alt="">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <img src="img/empresa_4.png" alt="">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <img src="img/empresa_5.png" alt="">
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <img src="img/empresa_6.png" alt="">
                    </div>
                </div>
            </div>
            







            <!-- Comienza Grafica -->

            <!-- <div class="row">
                    <div class="pt-3 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <div>
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                    <div class="pt-3 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <table id="example" class="display table table-striped table-whover  " style="width:100%">
                            <thead>
                                <tr>
                                    <th>Empresa</th>
                                    <th>Fecha Inicio</th>
                                    <th>OFecha Final</th>
                                    <th>Asociado</th>
                                    <th>Cointegrador</th>
                                    <th>Sesión</th>
                                    <th>Hrs</th>
                                </tr>
                            </thead>
                            <tbody>
                                   <?php
                                    $query = "SELECT * FROM sesiones";
                                    
                                    $resultado_registros = mysqli_query($conn, $query);

                                    while($row = mysqli_fetch_array($resultado_registros))
                                    {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['empresa'] ?></td>
                                            <td><?php echo $row['fecha_antes'] ?></td>
                                            <td><?php echo $row['fecha_despues'] ?></td>
                                            <td><?php echo $row['asociado'] ?></td>
                                            <td><?php echo $row['cointegrador'] ?></td>
                                            <td><?php echo $row['sesion'] ?></td>
                                            <td><?php echo $row['fecha_total']?></td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Empresa</th>
                                    <th>Fecha Inicio</th>
                                    <th>OFecha Final</th>
                                    <th>Asociado</th>
                                    <th>Cointegrador</th>
                                    <th>Sesión</th>
                                    <th>Hrs</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div> --> 
                                        <!-- Termina Grafica -->

            </div>
        </div>
    </div>
    <!-- Termina DashBoard -->

    <?php
        include 'layouts/footer.php';
    ?>
