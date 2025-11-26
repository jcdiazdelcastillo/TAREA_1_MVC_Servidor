<?php
    include "../controlador/profesorControlador.php";
    $idProfesor = $_GET['idProfesor'];

    $controlador = new ProfesorControlador();
    $mensaje="";

    if (isset ($_POST['nuevoNombre'])){
        $resultado=$controlador->modificarProfesor($idProfesor, $_POST['nuevoNombre']);
        if($resultado){
            $mensaje="NOMBRE MODIFICADO CORRECTAMENTE";
        }else{
            $mensaje="ERROR AL MODIFICAR NOMBRE";
        }
    }
    $resultado = $controlador->obtenerProfesor($idProfesor);
    $profesor=$resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
</head>
<body>
    <h3>Has seleccionado a <?php echo $profesor['nombre'];?></h3>
    <h3>DATOS ACTUALES</h3>
    <?php
        echo "<b>Nombre del profesor: </b>".$profesor['nombre']."<br><br>";
    ?>
    <form action="modificar.php?idProfesor=<?php echo $idProfesor;?>" method="POST"> <!-- PASO EL idProfesor por parámetros-->
        <label for="nombre">Nuevo Nombre: </label>
        <input type ="text" id="nombre" name="nuevoNombre"><br><br>
        <input type="submit" value = "enviar">
    </form>
    <?php
        if($mensaje!=""){
            echo $mensaje;
            echo "<a href='panel_Gestion_Prof.php'>Volver al inicio</a>";
        }
    ?>
</body>
</html>