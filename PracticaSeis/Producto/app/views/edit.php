<?php

require_once __DIR__ . '../../../core/database/conexionsql.php';
require_once __DIR__ . '/../models/update.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $consulta = "SELECT * FROM producto WHERE id=$id";
    $resultado = mysqli_query($conexion, $consulta);
    if (mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_array($resultado);
        $nombre_producto = $fila['nombre'];
        $cantidad_producto = $fila['cantidad'];
        $precio_producto = $fila['precio'];
        $disponibilidad_producto = $fila['disponibilidad'];
    }
}

if (isset($_POST['update'])) {
    $nombre_producto = $_POST['Nombre'];
    $cantidad_producto = $_POST['Cantidad'];
    $precio_producto = $_POST['Precio'];
    $disponibilidad_producto = $_POST['Disponibilidad'];
    $consulta = "UPDATE producto SET nombre='$nombre_producto', cantidad='$cantidad_producto', precio='$precio_producto', disponibilidad='$disponibilidad_producto' WHERE id=$id";
    mysqli_query($conexion, $consulta);
    $_SESSION['message'] = 'Producto modificado';
    $_SESSION['message_type'] = 'success';
}

?>


<link rel="stylesheet" href="../../public/css/edit.css">
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="Nombre" class="form-control" value="<?php echo htmlspecialchars($nombre_producto); ?>" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Cantidad" class="form-control" value="<?php echo htmlspecialchars($cantidad_producto); ?>" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Precio" class="form-control" value="<?php echo htmlspecialchars($precio_producto); ?>" autofocus>
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Disponible=1 | No Disponible=0</strong></label>

                        <select name="Disponibilidad" id="" class="form-control">
                            <option value="0" <?php if ($disponibilidad_producto == '0') echo 'selected="selected"'; ?>>0</option>
                            <option value="1" <?php if ($disponibilidad_producto == '1') echo 'selected="selected"'; ?>>1</option>
                        </select>
                    </div>
                    <button class="btn-success" name="update">Update</button>    
                    <br>                
                    <button class="btn-success"><a href="main.php">Volver</a></button>
                </form>
            </div>
        </div>
    </div>
</div>
