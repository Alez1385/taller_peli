<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Peliculas</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <form id="contactForm" method="post" action="../scripts/guardar_peli.php">
            <h2>Formulario de Prestamo</h2>
            
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" required>
            
            <label for="cod_usuario">Usuario:</label>
            <select name="cod_usuario" id="cod_usuario">
            <?php
                    include "../scripts/conexion.php";

                    $sql = "SELECT * FROM usuario";
                    $resultado = $conn->query($sql);

                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                            echo '<option value="' . $row['cod_usuario'] . '"> ' . $row['cod_usuario'] . '  -  ' . $row['nom_usuario'] . '</option>';
                        }
                    } else {
                        echo '<option>No hay peliculas disponibles</option>';
                    }
                    $conn->close();
                    ?>    
                </select>

                <label for="id_copia"># de Copia:</label>
            <select name="id_copia" id="id_copia">
            <?php
                    include "../scripts/conexion.php";

                    $sql = "SELECT * FROM copia";
                    $resultado = $conn->query($sql);

                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                            echo '<option value="' . $row['id_copia'] . '"> ' . $row['id_copia'] . '</option>';
                        }
                    } else {
                        echo '<option>No hay peliculas disponibles</option>';
                    }
                    $conn->close();
                    ?>    
                </select>
            
            
            

            <button type="submit">Enviar</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
