<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Copias</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <form id="contactForm" method="post" action="../scripts/guardar_copia.php">
            <h2>Formulario de Copias</h2>
            
            <label for="pres">Presentacion:</label>
            <select name="pres" id="pres">
                <option value="DVD">DVD</option>
                <option value="Blue-ray">Blu-ray</option>
                <option value="Descargable">Descargable</option>
            </select>



            <label for="estado">Estado:</label>
            <select name="estado" id="estado">
                <option value="Libre">Libre</option>
                <option value="Prestado">Prestado</option>
            </select>
            
            <label for="peli">Pelicula:</label>
            <select name="peli" id="peli">
            <?php
                    include "../scripts/conexion.php";

                    $sql = "SELECT * FROM pelicula";
                    $resultado = $conn->query($sql);

                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                            echo '<option value="' . $row['cod_pel'] . '">' . $row['nom_pel'] . '</option>';
                        }
                    } else {
                        echo '<option>No hay peliculas disponibles</option>';
                    }
                    $conn->close();
                    ?>    
                </select>


            <label for="cond">Condicion:</label>
            <input type="text" id="cond" name="cond" required>

            <button type="submit">Enviar</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
