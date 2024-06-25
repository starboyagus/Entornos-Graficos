<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e94f1b6b83.js" crossorigin="anonymous"></script>
    <title>Resultado</title>
</head>
<body class="bg-dark text-white">
    <?php
    include("conexion.inc");
    $song=$_POST['cancion'];
    if($song){
        $vSql = "select * from buscador where cancion LIKE '%".$song."%'";
        $resp = mysqli_query($link, $vSql) or die (mysqli_error($link));
        if(mysqli_num_rows($resp) == "0"){
            echo "<center>No hay resultados respecto a la palaba que busca<center>";
        } else {
            echo "<center><strong>Resultados de busqueda</strong></center><br>"; ?>
            <table class="table table-dark">
            <thead>
                <th> Cancion </th>
                <th> Artista </th>
                <th> Duracion </th>
            </thead>
            <?php

            while($cat = mysqli_fetch_array($resp)) {?>
            <tr>
            <td><?php echo ($cat['cancion']);?></td>
            <td><?php echo ($cat['artista']);?></td>
            <td><?php echo ($cat['duracion']);?></td>
            </tr>

    <?php };
        }
    } ?>
    </table>
    <br>
    <a class="btn btn-primary mx-2" href="formBuscador.html"> Volver al buscador</a>
    
</body>
</html>