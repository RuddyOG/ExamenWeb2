<?php
require_once __DIR__ . '../../../core/database/conexionsql.php';

// Variable para almacenar el mensaje
$mensaje = "";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $consulta = "DELETE FROM producto WHERE id = $id";
    $resultado = mysqli_query($conexion, $consulta);
    if (!$resultado) {
        die("La consulta falló.");
    } else {
        // Construye el mensaje con el ID y el nombre del producto borrado
        $mensaje = "Se ha borrado el producto con ID: $id";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto Borrado</title>
    <link rel="stylesheet" href="../../public/css/delete.css">
</head>
<body>
    <?php if (!empty($mensaje)) : ?>
        <div><?php echo $mensaje; ?></div>
    <?php endif; ?>

    <button class="volver"><a href="main.php">Volver</a></button>
</body>
</html>
