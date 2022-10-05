
    <?php
        include("conexion1.php");

        include 'layouts/header.php';
    ?>

    <!-- DashBoard -->
    <div class="container mt-5">
                    <div class="pt-5 table-sm-10 table-md-10 table-lg-10 col-xl-12">
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
                                    <th>Acciones</th>
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
                                            <td>
                                                <a href="edit.php?id=<?php echo $row['id']?> " class="btn btn-secondary">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <a href="borrar_sesion.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                            </td>
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
                </div>
            </div>
        </div>
    </div>
    <!-- Termina DashBoard -->

  <!-- scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        $(document).ready(function () {
    $('#example').DataTable({
        scrollY: 400,
        scrollX: true,
    });
});
    </script>
    <script>
        const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'My First dataset',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [0, 10, 5, 2, 20, 30, 45],
    }]
  };

  const config = {
    type: 'line',
    data: data,
    options: {}
  };
    </script>
    <script>
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
</body>
</html>
