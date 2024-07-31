<?php
include "conexion.php";

if (isset($_GET['id_prestamo'])) {
    $id_prestamo = $_GET['id_prestamo'];

    // Eliminar el préstamo de la base de datos
    $sql = "DELETE FROM prestamos WHERE id_prestamo = '$id_prestamo'";

    if ($conn->query($sql) === TRUE) {
        echo "Préstamo eliminado correctamente.";
    } else {
        echo "Error al eliminar el préstamo: " . $conn->error;
    }

    $conn->close();
} else {
    echo "No se ha proporcionado un ID de préstamo.";
}
