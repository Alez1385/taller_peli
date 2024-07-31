<?php
include "conexion.php";

if (isset($_GET['id_pelicula'])) {
    $id_pelicula = $_GET['id_pelicula'];

    // Eliminar la película de la base de datos
    $sql = "DELETE FROM pelicula WHERE id_pelicula = '$id_pelicula'";

    if ($conn->query($sql) === TRUE) {
        echo "Película eliminada correctamente.";
    } else {
        echo "Error al eliminar la película: " . $conn->error;
    }

    $conn->close();
} else {
    echo "No se ha proporcionado un ID de película.";
}
