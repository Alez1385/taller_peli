<?php

include ("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $dir = $_POST['dir'];
    $gen = $_POST['gen'];
    $nac = $_POST['nac'];
    $cat = $_POST['cat'];
    $fecha = $_POST['fecha'];
   

    $sql = "INSERT INTO pelicula(nom_pel, director, nacionalidad, genero, categoria, fecha) 
            VALUES ('$name', '$dir', '$gen', '$nac', '$cat', '$fecha')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
