<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>

<body>
<div class="card card-body">
        <form action="guardar_producto.php" method="POST">
            <input type="text" name="Nombre" class="form-control" placeholder="Nombre Producto" autofocus>
            <input type="text" name="Cantidad" class="form-control" placeholder="Cantidad Producto" autofocus>
            <input type="text" name="Precio" class="form-control" placeholder="Precio Producto" autofocus>
            <input type="submit" name="save_task" class="btn btn-success btn-block" value="Guardar Producto">
        </form>
</div>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre Producto</th>
            <th>Cantidad Producto</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Editar / Eliminar</th>
        </tr> 
    </thead>
    <tbody>
        <?php
            if ($conexion) {
                $query = "SELECT * FROM producto";
                $result_tasks = mysqli_query($conexion, $query);    

                while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nombre']; ?></td>
                    <td><?php echo $row['cantidad']; ?></td>
                    <td><?php echo $row['precio']; ?></td>
                    <td><?php echo $row['disponibilidad']; ?></td>
                    <td width="200px">
                        <a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-warning">
                            <i class="fas fa-marker"></i> Editar
                        </a>
                        <button type="button" class="btn btn-danger" onclick="confirmDelete(<?php echo $row['id']; ?>)">
                            <i class="far fa-trash-alt"></i> Eliminar
                        </button>
                        <a href="detalle.php?id=<?php echo $row['id']?>" class="btn btn-info">
                            <i class="fas fa-scroll"></i> Detalle
                        </a>
                    </td>
                </tr>
                <?php }
            } else {
                echo "<tr><td colspan='6'>Error: No se pudo conectar a la base de datos.</td></tr>";
            }
        ?>
    </tbody>
</table>

<script src="../../public/js/confirmDelete.js"></script>


</body>
</html>
