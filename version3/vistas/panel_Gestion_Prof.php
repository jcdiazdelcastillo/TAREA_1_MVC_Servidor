<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Modificacion de profesores</title>
</head>
<body>

    <?php
        echo $cListar->mensaje;
        foreach($profesores as $fila){
            echo "<div>";
            echo "<h3 for='".$fila['nombre']."'>".$fila['nombre']."</h3>";
            echo "<a href='procesarEliminar.php?idProfesor=".$fila['idProfesor']."'>Eliminar</a> ";
            echo "</div>";
        }
    ?>
    <a href="procesarAlta.php">Ir a Alta Profesores</a>
</body>
</html>