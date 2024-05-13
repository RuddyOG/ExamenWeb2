    // Función para confirmar eliminación
    function confirmDelete(id) {
        if (confirm("¿Estás seguro de que deseas eliminar este producto?")) {
            window.location.href = 'eliminar.php?id=' + id;
        }
    }