    // Función para abrir la modal y almacenar el ID del producto a eliminar
    function confirmDelete(id) {
        window.productIdToDelete = id;
        document.getElementById("myModal").style.display = "block";
    }

    // Función para cerrar la modal
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }

    // Función para confirmar la acción de eliminación
    function confirmDeleteAction() {
        closeModal();
        window.location.href = 'delete.php?id=' + window.productIdToDelete;
    }