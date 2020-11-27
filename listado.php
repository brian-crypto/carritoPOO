<?php
error_reporting(0);
require_once 'modelo/producto.php';
$valor=Producto::mostrarProductos();
require_once "vistas/listado.php";
if(isset($_GET['idProducto'])){
    $idProducto=$_GET['idProducto'];
    $objProducto=new Producto();
    $objProducto->setIdProducto($idProducto);
    $objProducto->eliminarProductos();
    header("location:./listado.php");
}
?>