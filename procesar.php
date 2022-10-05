<?php

    $fecha_de_inicio = $_REQUEST['fecha_antes'];
    $fecha_del_final = $_REQUEST['fecha_despues'];
    
    echo "<p>La fecha inicio es: $fecha_de_inicio</p>";
    echo "<p>La fecha final es: $fecha_del_final</p>";
    
    $fecha_inicial = new datetime($fecha_de_inicio);
    $fecha_final = new datetime($fecha_del_final);

    $fecha_total = $fecha_inicial->diff($fecha_final);
    printf('%d años, %d meses, %d días, %d horas, %d minutos', $fecha_total->y, $fecha_total->m, $fecha_total->d, $fecha_total->h, $fecha_total->i);
