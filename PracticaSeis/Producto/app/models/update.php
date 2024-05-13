<?php
require_once __DIR__ . '../../../core/database/conexionsql.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['update'])) {
        $nombre_producto = $_POST['Nombre'];
        $cantidad_producto = $_POST['Cantidad'];
        $precio_producto = $_POST['Precio'];
        $disponibilidad_producto = $_POST['Disponibilidad'];
        $consulta = "UPDATE producto SET nombre='$nombre_producto', cantidad='$cantidad_producto', precio='$precio_producto', disponibilidad='$disponibilidad_producto' WHERE id=$id";
        mysqli_query($conexion, $consulta);
        $_SESSION['message'] = 'Producto modificado';
        $_SESSION['message_type'] = 'success';
        header('Location: ../views/main.php');
        exit();
    }
}
?>
