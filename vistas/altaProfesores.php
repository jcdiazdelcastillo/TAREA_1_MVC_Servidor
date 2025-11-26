<?php
    include "../controlador/profesorControlador.php";

    if(isset($_POST['nombre'])){
        $nombre =$_POST['nombre'];
        //INSTANCIAMOS EL CONTROLADOR AL Q HAREMOS LAS LLAMADAS A SUS FUNCIONES
        $controlador = new ProfesorControlador();
        $resultado = $controlador->insertarProfesor($nombre);
        if($resultado){
            echo "usuario introducido de manera correcta";
        }else{
            echo "Error al introducir el usuario";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de profesores</title>
</head>
<body>
    <form action="altaProfesores.php" method="POST">
        <h2>FORMULARIO ALTA DE PROFESORES</h3>
        <label for ="nombre">Introducir nombre profesor</label><br>
        <input type ="text" id="nombre" name="nombre"><br>
        <input type="submit" value="enviar">
    </form>
    <a href="panel_Gestion_Prof.php">ir a panel de modificación / eliminacion de profesores</a>
</body>
</html>