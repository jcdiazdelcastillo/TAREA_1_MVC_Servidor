<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de profesores</title>
</head>
<body>
    <form action="../procesarAlta.php" method="POST">
        <h2>FORMULARIO ALTA DE PROFESORES</h3>
        <label for ="nombre">Introducir nombre profesor</label><br>
        <input type ="text" id="nombre" name="nombre"><br>
        <input type="submit" value="enviar">
    </form>
    <a href="../procesar_ListarProfesores.php">ir a panel de modificación / eliminacion de profesores</a> <!-- SI INTRODUZCO PROFESOR SE ROMPE LA RUTA-->
</body>
</html>