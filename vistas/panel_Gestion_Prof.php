<?php
    include "../controlador/profesorControlador.php";

    //INSTANCIAMOS EL CONTROLADOR Y HACEMOS LAS LLAMADAS A SUS MÉTODOS
    $controlador = new ProfesorControlador();
    $profesores = $controlador->listarProfesores();

    if(!isset($_GET['mensaje'])){
        $mensaje = null;
    }else{
        $infoMensaje = $_GET['mensaje'];
        if($infoMensaje == "eliminado"){
            $mensaje = "PROFESOR ELIMINADO CORRECTAMENTE";
        }else if ($infoMensaje == "cancelado"){
            $mensaje = "OPERACION CANCELADA";
        }else{
            $mensaje = "ERROR, NO SE HA PODIDO ELIMINAR AL MENSAJE";
        }
    }
?>
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
        if($mensaje != null){
            echo $mensaje."<br>";
        }
        while($fila = $profesores->fetch_assoc()){
            echo "<h3 for='".$fila['nombre']."'>".$fila['nombre']."</h3>";
            echo "<a href='../procesar.php?idProfesor=".$fila['idProfesor']."&accion=modificar'>Modificar</a>";
            echo "<a href='../procesar.php?idProfesor=".$fila['idProfesor']."&accion=eliminar'>Eliminar</a><br>";
        }
    ?>
    <a href="altaProfesores.php">Ir a Alta Profesores</a>
</body>
</html>