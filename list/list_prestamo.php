<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Préstamos</title>
    <link rel="stylesheet" href="../styles/list_styles.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Préstamos</h1>
        <div class="table-responsive">
            <table class="loan-table">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Usuario</th>
                        <th># de Copia</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "../scripts/conexion.php";
                        $sql = "SELECT prestamo.*, prestamo.fecha_prest, usuario.nom_usuario, copia.id_copia 
                                FROM prestamo
                                JOIN usuario ON prestamo.cod_usuario = usuario.cod_usuario 
                                JOIN copia ON prestamo.cod_copia = copia.id_copia";
                        $resultado = $conn->query($sql);
                        if ($resultado->num_rows > 0) {
                            while ($row = $resultado->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . $row['fecha_prest'] . '</td>';
                                echo '<td>' . $row['nom_usuario'] . '</td>';
                                echo '<td>' . $row['id_copia'] . '</td>';
                                echo '<td><button class="btn btn-danger" onclick="location.href=\'../scripts/eliminar_prestamo.php?cod_prestamo='. $row['cod_prestamo']. '\'">Borrar</button></td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="4">No hay préstamos disponibles</td></tr>';
                        }
                        $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
