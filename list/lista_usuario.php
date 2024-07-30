<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="../styles/list_styles.css">
</head>
<body>
    <div class="container">
        <div class="user__cont">
            <?php
                include "../scripts/conexion.php";
                $sql = "SELECT * FROM usuario";
                $resultado = $conn->query($sql);
                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        echo '<div class="user">';
                        echo '<h2>' . $row['nom_usuario'] . '</h2>';
                        echo '<p>' . $row['apellidos'] . '</p>';
                        echo '<p>' . $row['telefono'] . '</p>';
                        echo '<p>' . $row['tipo_doc'] . '</p>';
                        echo '<p>' . $row['doc_usuario'] . '</p>';
                        echo '<p>' . $row['Mail'] . '</p>';
                        echo '<p>' . $row['fecha_nac'] . '</p>';
                        echo '<img src="' . $row['Foto'] . '" alt="Foto de usuario">';
                        echo '<button class="btn btn-primary" onclick="location.href=\'../scripts/eliminar_user.php?' . ">Eliminar</button>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No hay usuarios disponibles</p>';
                }
                $conn->close();
            ?>
        </div>
    </div>
</body>
</html>
