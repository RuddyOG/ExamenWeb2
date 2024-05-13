<?php
require_once __DIR__ . '../../../core/database/conexionsql.php';

// Verificar si se enviaron los datos del formulario
if(isset($_POST['nombreUser']) && isset($_POST['contrasenia'])) {
    // Obtener el nombre de usuario y la contraseña del formulario
    $nombreUser = $_POST['nombreUser'];
    $password = $_POST['contrasenia'];

    // Consultar la base de datos utilizando un prepared statement
    $consulta = "SELECT * FROM usuario WHERE nombre = ?";
    $stmt = $conexion->prepare($consulta);
    $stmt->bind_param('s', $nombreUser);
    $stmt->execute();
    $resultado = $stmt->get_result();

    // Verificar si se encontró un usuario con el nombre proporcionado
    if ($resultado->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        $hash_guardado = $fila['password'];

        // Verificar la contraseña usando password_verify()
        if (password_verify($password, $hash_guardado)) {
            // Nombre de usuario y contraseña válidos, redirigir a la página principal
            header("Location: ../views/main.php");
            exit();
        } else {
            // Contraseña incorrecta, redirigir al formulario de inicio de sesión con un mensaje de error
            header("Location: signIn.php?error=Contraseña incorrecta");
            exit();
        }
    } else {
        // Nombre de usuario incorrecto, redirigir al formulario de inicio de sesión con un mensaje de error
        header("Location: signIn.php?error=Nombre de usuario incorrecto");
        exit();
    }

    // Cerrar el statement preparado
    $stmt->close();
} else {
    // Si los datos del formulario no fueron enviados, mostrar un mensaje de error
    echo "Error: Los datos del formulario no fueron recibidos correctamente.";
}
?>
