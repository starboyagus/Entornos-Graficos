<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Consulta.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Ciudades</title>
</head>
<body class="root">
<p> <a href="menu.html" class="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-4.28 9.22a.75.75 0 0 0 0 1.06l3 3a.75.75 0 1 0 1.06-1.06l-1.72-1.72h5.69a.75.75 0 0 0 0-1.5h-5.69l1.72-1.72a.75.75 0 0 0-1.06-1.06l-3 3Z" clip-rule="evenodd" />
      </svg> Volver al menu</a></p>


    <?php
    include("conexion.inc");

    $vSql = "SELECT * from ciudades";
    $vResultado = mysqli_query($link, $vSql);
    $total = mysqli_num_rows($vResultado);
    ?>

    <table class="consulta">
        <tr>
            <th> ID </th>
            <th> Ciudad </th>
            <th> Pais </th>
            <th> Habitantes </th>
            <th> Superficie (km2) </th>
            <th> Tiene Metros </th>
        </tr>
    <?php
    while ($fila = mysqli_fetch_array($vResultado))
    {
        ?>
        <tr>
            <td><?php echo($fila['id']); ?> </td>
            <td><?php echo($fila['ciudad']); ?> </td>
            <td><?php echo($fila['pais']); ?> </td>
            <td><?php echo($fila['habitantes']); ?> </td>
            <td><?php echo($fila['superficie']); ?> </td>
            <td><?php echo($fila['tieneMetros']); ?> </td>
        </tr>
    <?php
    }

    // Liberar resultados

    mysqli_free_result($vResultado);

    // Cerrar conexion

    mysqli_close($link)
    ?>

</table>
    
</body>
</html>