<?php
session_start();
$carro=$_SESSION['carro'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VER CARRITO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e94f1b6b83.js" crossorigin="anonymous"></script>
</head>
<body class="bg-black">
    <h1 class="carrito_h1">CARRITO</h1>
    <?php
    if($carro){
        ?>
        <table class="table table-dark table-striped">
            <thead class="catalogo_cabecera">
                <th width="105">PRODUCTO</th>
                <th width="195">PRECIO</th>
                <th colspan="2" align="center">CANTIDAD DE UNIDADES</th>
                <th width="100">BORRAR</th>
                <th width="100">ACTUALIZAR</th>
            </thead>
            <?php
            $contador2=0;
            $contador=0;
            $suma=0;
            foreach($carro as $k => $v){
                $subto = $v['cantidad']*$v['precio'];
                $suma = $suma + $subto;
                $contador++;
                $contador2 = $v['cantidad'] + $contador2;
                ?>

                <form name="a<?php echo $v['identificador'] ?>" method="post" action="agregar.php?<?php echo SID ?>" id="a<?php echo $v['identificador'] ?>">
                    <tr>
                        <td><?php echo $v['producto']?></td>
                        <td ><?php echo $v['precio']?></td>
                        <td width="43"><?php echo $v['cantidad']?></td>
                        <td width="136">
                            <input type="text" name="cantidad" id="cantidad" value="<?php echo $v['cantidad']?>" size="8">
                            <input type="hidden" name="id" id="id" value="<?php echo $v['id']?>">
                        </td>
                        <td> <a class="link_carrito" href="borra.php?<?php echo SID?>&id=<?php echo $v['id']?>"><i class="fa-solid fa-trash"></i> Borrar</a> </td>
                        <td> <a class="link_carrito" href="vercarrito.php?<?php echo SID?>&id=<?php echo $v['id']?>"><i class="fa-solid fa-arrows-rotate"></i> Actualizar</a> </td>
                    </tr>
                </form>
                <?php } ?>
        </table>

        <div align="center"> <span class="prod"> Total de articulos: <?php echo $contador2?> </span> 
    </div> <br>
    <div align="center"> <span class="prod"> Total: <strong>$<?php  echo number_format($suma,2);?></strong></span> </div>
    <br>
    <div align="center">
    <a class="link_carrito" href="catalogo.php?<?php echo SID;?>&costo=<?php echo $suma;?>"><i class="fa-solid fa-arrow-right"></i> Continuar Comprando</a>
    <br>
    <a class="link_carrito" href="regpago.php?<?php echo SID;?>&costo=<?php echo $suma;?>"><i class="fa-brands fa-paypal"></i> Finalizar Compra</a>
</div>
    <?php } else { ?>
    <p align="center"><span class="prod"> No hay productos seleccionados</span> <a class="link_carrito" href="catalogo.php?<?php echo SID;?>">Continuar</a> <?php } ?>  </p>
</body>
</html>