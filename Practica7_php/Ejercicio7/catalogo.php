<?php
ob_start("ob_gzhandler");
session_start();

$link = mysqli_connect("localhost:3307","root") or die ("Problemas de conexion a la base de datos");

mysqli_select_db($link, "super");

if(isset($_SESSION['carro']))
$carro=$_SESSION['carro'];else $carro=false;

$vSql = 'Select * from catalogo order by producto asc';
$vResult = mysqli_query($link, $vSql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e94f1b6b83.js" crossorigin="anonymous"></script>
</head>
<body class="bg-black">
    <table class="table table-dark table-striped">
        <thead class="catalogo_cabecera">
            <th width="170"> PRODUCTOS </th>
            <th width="77"> PRECIO </th>
            <th width="25"> <a href="vercarrito.php?<?php echo SID ?>"
            title="Ver carrito" class="link_catalogo" > <i class="fa-solid fa-cart-shopping"></i> Ver Carrito</a>
            </th>
        </thead>
        <?php
        while($row=mysqli_fetch_assoc($vResult)){
            ?>
        <tr valign="middle" class="catalogo">
            <td><?php echo $row['producto']?></td>
            <td><?php echo $row['precio']?></td>
            <td><?php
                if(!$carro || !isset($carro[md5($row['id'])]['identificador']) ||
                $carro[md5($row['id'])]['identificador']!=md5($row['id'])){
                    ?><a class="link_catalogo" href="agregar.php?<?php echo SID ?>&id=<?php echo $row['id'];?>">
                    <i class="fa-solid fa-plus"></i>
                    Agregar al carro</a><?php }
                    else{
                    ?> <a class="link_catalogo" href="borra.php?<?php echo SID ?>&id=<?php echo $row['id'];?>">
                    <i class="fa-solid fa-plus fa-rotate-by" style="--fa-rotate-angle: 45deg;""></i>
                    Quitar del carro</a><?php }
                    ?> </td>
        </tr><?php } ?>
    </table>
</body>
</html>

<?php
ob_end_flush();
?>