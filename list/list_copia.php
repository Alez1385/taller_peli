<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Copias</title>
    <link rel="stylesheet" href="../styles/list_styles.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Copias</h1>
        <div class="table-responsive">
            <table class="copy-table">
                <thead>
                    <tr>
                        <th>Presentación</th>
                        <th>Estado</th>
                        <th>Película</th>
                        <th>Condición</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "../scripts/conexion.php";
                        $sql = "SELECT copia.id_copia, copia.presentacion, copia.estado, pelicula.nom_pel, copia.condicion 
                                FROM copia 
                                JOIN pelicula ON copia.cod_pel = pelicula.cod_pel";
                        $resultado = $conn->query($sql);
                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . $row['presentacion'] . '</td>';
                                echo '<td>' . $row['estado'] . '</td>';
                                echo '<td>' . $row['nom_pel'] . '</td>';
                                echo '<td>' . $row['condicion'] . '</td>';
                                echo '<td><button class="btn btn-danger" onclick="location.href=\'../scripts/eliminar_copia.php?id_copia='. $row['id_copia']. '\'">Borrar</button></td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="5">No hay copias disponibles</td></tr>';
                        }
                        $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
