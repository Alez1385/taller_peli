<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Películas</title>
    <link rel="stylesheet" href="../styles/list_styles.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Películas</h1>
        <div class="table-responsive">
            <table class="movie-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Director</th>
                        <th>Género</th>
                        <th>Nacionalidad</th>
                        <th>Categoría</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "../scripts/conexion.php";
                        $sql = "SELECT * FROM pelicula";
                        $resultado = $conn->query($sql);
                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . $row['nom_pel'] . '</td>';
                                echo '<td>' . $row['director'] . '</td>';
                                echo '<td>' . $row['genero'] . '</td>';
                                echo '<td>' . $row['nacionalidad'] . '</td>';
                                echo '<td>' . $row['categoria'] . '</td>';
                                echo '<td>' . $row['fecha'] . '</td>';
                                echo '<td><button class="btn btn-danger" onclick="location.href=\'../scripts/eliminar_peli.php?cod_pel='. $row['cod_pel']. '\'">Borrar</button></td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="7">No hay películas disponibles</td></tr>';
                        }
                        $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
