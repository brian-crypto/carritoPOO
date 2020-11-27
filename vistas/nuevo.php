<?php
include_once 'header.php';
?>
<h1>Cargar nuevo producto</h1>
<br>
<form method="post" action="./nuevo.php">
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre Producto" name="nombre">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Precio" name="precio">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Presentacion" name="presentacion">

  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Stock" name="stock">
  </div>
  <button type="submit" class="btn btn-primary" name="enviar">Guardar Producto</button>
</form>