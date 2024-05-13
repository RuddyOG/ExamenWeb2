<?php
require_once __DIR__ . '../../../core/database/conexionsql.php';

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
?>

<link rel="stylesheet" href="../../public/css/detalle.css">
<div class="container p-4">
    <div class="col-md-4 mx-auto">
        <div class="card card-body">
            <div class="div12">
                <h2><strong>Nombre: <?php echo htmlspecialchars($nombre_producto); ?></strong></h2><br>
                <h2><strong>Cantidad: <?php echo htmlspecialchars($cantidad_producto); ?></strong></h2><br>
                <h2><strong>Precio: <?php echo htmlspecialchars($precio_producto); ?></strong></h2><br>
                <h2><strong>Disponibilidad: <?php echo htmlspecialchars($disponibilidad_producto); ?></strong></h2>
            </div>
            <button class="btnvolver"><a href="main.php">Volver</a></button><br><br>
        </div>
    </div>
</div>
