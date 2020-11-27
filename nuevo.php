<?php
error_reporting(0);
require_once 'modelo/producto.php';
if(isset($_POST['enviar'])){
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $presentacion=$_POST['presentacion'];
    $stock=$_POST['stock'];
    $objProducto=new Producto($nombre,$precio,$presentacion,$stock);
    $objProducto->guardarProducto();
    header("location:index.php?rta");
}else{
    require_once 'vistas/nuevo.php';
}
?>