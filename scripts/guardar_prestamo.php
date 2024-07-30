<?php

include ("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fecha = $_POST['fecha'];
    $cod_usuario = $_POST['cod_usuario'];
    $id_copia = $_POST['id_copia'];
   

    $sql = "INSERT INTO prestamo(fecha, cod_usuario, id_copia) 
            VALUES ('$fecha', '$cod_usuario', '$id_copia')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
