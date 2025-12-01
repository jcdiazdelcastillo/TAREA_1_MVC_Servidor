<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eliminar profesores</title>
    </head>
    <body>
        <form action="procesarEliminar.php?idProfesor=<?php echo $_GET['idProfesor']; ?>" method="POST">
            <h3>¿Estás seguro de que quieres eliminar al profesor <?php echo $nombre?>?</h3>
            <label for="SiEliminar">Si</label>
            <input type="radio" id="SiEliminar" name="eliminar" value="si"><br>
            <label for="NoEliminar">No</label>
            <input type="radio" id="NoEliminar" name="eliminar" value="no"><br>
            <input type="submit" value="enviar"><br>

        </form>
        <?php echo $cEliminar->mensaje?>
        <a href="procesar_ListarProfesores.php">VOLVER ATRÁS</a>
    </body>
</html>