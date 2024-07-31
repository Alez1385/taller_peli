<?php
include "conexion.php";

if (isset($_GET['id_copia'])) {
    $id_copia = $_GET['id_copia'];

    // Eliminar la copia de la base de datos
    $sql = "DELETE FROM copia WHERE id_copia = '$id_copia'";

    if ($conn->query($sql) === TRUE) {
        echo "Copia eliminada correctamente.";
    } else {
        echo "Error al eliminar la copia: " . $conn->error;
    }

    $conn->close();
} else {
    echo "No se ha proporcionado un ID de copia.";
}
