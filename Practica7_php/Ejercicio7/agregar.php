<?php
session_start();
extract($_REQUEST);
$link = mysqli_connect("localhost:3307","root") or die ("Problemas de conexion a la base de datos");
mysqli_select_db($link, "Compras");
if(!isset($cantidad)) { $cantidad = 1; }

$vSql="select * from catalogo where id='".$id."'";
$vResult = mysqli_query($link, $vSql);
$row = mysqli_fetch_array($vResult);

if (isset($_SESSION['carro']))
    $carro = $_SESSION['carro'];
    $carro[md5($id)]=array('identificador'=>md5($id),'cantidad'=>$cantidad,'producto'=>$row['producto'],'precio'=>$row['precio'],'id'=>$id);
    $_SESSION['carro']=$carro;
    header("Location:catalogo.php?".SID);
    ?>