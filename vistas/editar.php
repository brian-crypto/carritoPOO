<?php
include_once 'header.php';
?>
<h1>Editar producto</h1>
<br>
<form method="post" action="./editar.php">
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row['Nombre']?>" placeholder="Nombre Producto" name="nombre">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row['Precio']?>"placeholder="Precio" name="precio">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row['Presentacion']?>"placeholder="Presentacion" name="presentacion">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row['Stock']?>"placeholder="Stock" name="stock">
  </div>
  <input type="hidden" name="idProducto" value="<?php echo $row['idProducto']?>">
  <button type="submit" class="btn btn-primary" name="editar">Editar</button>
</form>