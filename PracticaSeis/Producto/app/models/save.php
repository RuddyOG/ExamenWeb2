<?php
session_start(); // Iniciamos la sesión si aún no está iniciada

require_once __DIR__ . '../../../core/database/conexionsql.php';

if (isset($_POST['save_task'])) {
    $nombre = $_POST['Nombre'];
    $cantidad = $_POST['Cantidad'];
    $precio = $_POST['Precio'];

    // Preparar la consulta SQL usando un prepared statement
    $sql = "INSERT INTO producto (nombre, cantidad, precio) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($sql);

    // Vincular parámetros
    $stmt->bind_param('sdi', $nombre, $cantidad, $precio);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        $_SESSION['message'] = 'Producto guardado';
        $_SESSION['message_type'] = 'success';
        header('Location: ../views/main.php'); // Redirigir a main.php
        exit(); // Salir del script después de redirigir
    } else {
        die("Query Failed.");
    }
}
?>
