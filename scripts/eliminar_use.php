<?php
include "conexion.php";

if (isset($_GET['cod_usuario'])) {
    $cod_usuario = $_GET['cod_usuario'];

    // Eliminar el usuario de la base de datos
    $sql = "DELETE FROM usuario WHERE cod_usuario = '$cod_usuario'";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario eliminado correctamente.";
    } else {
        echo "Error al eliminar el usuario: " . $conn->error;
    }

    $conn->close();
} else {
    echo "No se ha proporcionado un código de usuario.";
}

