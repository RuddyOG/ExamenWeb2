<?php
require_once __DIR__ . '../../../config/config.php';
?>

<script>
    // Mostrar un mensaje de alerta con JavaScript
    alert("Conexión exitosa a la base de datos");

    // Cerrar automáticamente el mensaje de alerta después de 5 segundos
    setTimeout(function(){
        // Cerrar el mensaje de alerta
        window.close();
    }, 5000); // 5000 milisegundos = 5 segundos
</script>

<?php
class ConexionModel {
    public function conectar_a_bd() {
        global $host, $db_usuario, $db_contrasena, $db_nombre;
        
        $conexion = new mysqli($host, $db_usuario, $db_contrasena, $db_nombre);

        // Verificar la conexión
        if ($conexion->connect_error) {
            die("Conexión fallida: " . $conexion->connect_error);
        }
        return $conexion;
    }
}

$conexionModel = new ConexionModel();
$conexion = $conexionModel->conectar_a_bd();
?>
