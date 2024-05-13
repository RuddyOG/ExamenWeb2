<?php 

require_once __DIR__ . '../../../core/database/conexionsql.php';;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['createUsername'];
    $password1 = $_POST['createPassword'];
    $password2 = $_POST['rewritePassword'];

    // Verificar si las contraseñas son iguales
    if ($password1 === $password2) {
        // Hash de la contraseña
        $hashedPassword = password_hash($password1, PASSWORD_DEFAULT);

        // Preparar la consulta SQL usando un prepared statement
        $sql = "INSERT INTO usuario (nombre, password) VALUES (?, ?)";
        $stmt = $conexion->prepare($sql);

        // Vincular parámetros
        $stmt->bind_param('ss', $nombre, $hashedPassword);

        // Ejecutar la consulta
        if ($stmt->execute()) {
            echo "¡Cuenta creada exitosamente!";
            // Esperar 3 segundos y redirigir
            header("refresh:3; url=../views/main.php");
        } else {
            echo "Error al crear la cuenta.";
        }
    } else {
        echo "Las contraseñas no coinciden.";
    }
}
?>
