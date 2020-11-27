<?php
include "header.php";

foreach ($valor as $row){

}
?>

        <h1>Productos en tienda</h1>
        <table class="table table-striped table-dark">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Presentacion</th>
                <th>Stock</th>
                <th>Operaciones</th>
            </tr>
            <?php
            foreach ($valor as $row){
            ?>
            <tr>
                <td><?php echo $row['idProducto']; ?></td>
                <td><?php echo $row['Nombre']; ?></td>
                <td><?php echo $row['Precio']; ?></td>
                <td><?php echo $row['Presentacion']; ?></td>
                <td><?php echo $row['Stock']; ?></td>
                <td>
                    <a href="./listado.php?idProducto=<?php echo $row['idProducto']; ?>">Eliminar</a>
                    - 
                    <a href="./editar.php?idProducto=<?php echo $row['idProducto']; ?>">Editar</a>
                </td>  
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>