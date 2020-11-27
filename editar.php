<?php
error_reporting(0);
include_once 'modelo/producto.php';

if(isset($_POST['editar'])){
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $presentacion=$_POST['presentacion'];
    $stock=$_POST['stock'];
    $idProducto=$_POST['idProducto'];
    $objProducto = new Producto($nombre,$precio,$presentacion,$stock,$idProducto);
    $objProducto->editarProducto();
    header("location:listado.php");
}else{
    $idProducto=$_GET['idProducto'];
    $objProducto=new Producto();
    $objProducto->setIdProducto($idProducto);
    $row=$objProducto->mostrarProductosUnico();
    include_once "vistas/editar.php";
}
?>