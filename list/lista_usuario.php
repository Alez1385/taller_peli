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
        <h1>Lista de Usuarios</h1>
        <div class="table-responsive">
            <table class="user-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Teléfono</th>
                        <th>Tipo de Documento</th>
                        <th>Documento</th>
                        <th>Email</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Foto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "../scripts/conexion.php";
                        $sql = "SELECT * FROM usuario";
                        $resultado = $conn->query($sql);
                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . $row['nom_usuario'] . '</td>';
                                echo '<td>' . $row['apellidos'] . '</td>';
                                echo '<td>' . $row['telefono'] . '</td>';
                                echo '<td>' . $row['tipo_doc'] . '</td>';
                                echo '<td>' . $row['doc_usuario'] . '</td>';
                                echo '<td>' . $row['Mail'] . '</td>';
                                echo '<td>' . $row['fecha_nac'] . '</td>';
                                echo '<td><img src="' . $row['Foto'] . '" alt="Foto de usuario" class="user-photo"></td>';
                                echo '<td><button class="btn btn-danger" onclick="location.href=\'../scripts/eliminar_use.php?cod_usuario='. $row['cod_usuario']. '\'">Borrar</button></td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="9">No hay usuarios disponibles</td></tr>';
                        }
                        $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
