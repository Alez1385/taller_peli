<?php

include ("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $pres = $_POST['pres'];
    $estado = $_POST['estado'];
    $peli = $_POST['peli'];
    $cond = $_POST['cond'];
   

    $sql = "INSERT INTO copia(presentacion, estado, cod_pel, condicion) 
            VALUES ('$pres', '$estado', '$peli', '$cond')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
