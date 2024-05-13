<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="../../public/css/main.css">
</head>
<body>
<?php
require_once __DIR__ . '/../../core/database/conexionsql.php';
?>
<main class="container p-4">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <div class="row">

    <div class="tabla1">
      <form action="../models/save.php" method="POST">
        <input type="text" name="Nombre" class="form-control" placeholder="Nombre Producto" autofocus>
        <input type="text" name="Cantidad" class="form-control" placeholder="Cantidad Producto">
        <input type="text" name="Precio" class="form-control" placeholder="Precio Producto"><br><br>
        <input type="submit" name="save_task" class="btn-success" value="Guardar Producto">
      </form>
    </div>


        <div class="tabla1">
          <table class="tabla12">
                <thead>
                  <tr>
                    <th>Nombre Producto</th>
                    <th>Cantidad Producto</th>
                    <th>Precio Producto</th>
                    <th>Disponibilidad Producto</th>
                    <th>Editar/Eliminar</th>
                  </tr>
                </thead>

                <tbody>

                  <?php
                  if ($conexion) {
                    $consulta = "SELECT * FROM producto";
                    $result_tasks = mysqli_query($conexion, $consulta);    
                    while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                    <tr>
                      <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                      <td><?php echo htmlspecialchars($row['cantidad']); ?></td>
                      <td><?php echo htmlspecialchars($row['precio']); ?></td>
                      <td><?php echo htmlspecialchars($row['disponibilidad']); ?></td>
                      <td>
                        <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-warning">
                          <i class="fas fa-marker"></i>
                        </a>
                        <button type="button" class="btn btn-danger" onclick="confirmDelete(<?php echo $row['id']; ?>)"><i class="far fa-trash-alt"></i></button>
                        <a href="detalle.php?id=<?php echo $row['id']?>" class="btn btn-info">
                          <i class="fas fa-scroll"></i>
                        </a>
                      </td>
                    </tr>
                    <?php }
                  } else {
                    echo "<tr><td colspan='5' class='error-message'>Error: No se pudo conectar a la base de datos.</td></tr>";
                  }
                  ?>
                </tbody>
          </table>
        </div>
    </div>
</main>

<!-- Ventana modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <p>¿Estás seguro de eliminar este producto?</p>       
        <button class="btn-no" onclick="closeModal()">No</button>
        <button class="btn-yes" onclick="confirmDeleteAction()">Sí</button>
    </div>
</div>

<script src="../../public/js/modal.js"></script>


</body>
</html>
