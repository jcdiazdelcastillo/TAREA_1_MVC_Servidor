<?php
    include "controlador/profesorControlador.php";
 
    $cEliminar = new ProfesorControlador();
    $idProfesor = $_GET['idProfesor'];

    $mensaje=null;
    if(isset ($_POST["eliminar"])){ /* Significa que ya se ha pulsado en eliminar del formulario, que es la segunda vuelta al formulario*/
        if($_POST["eliminar"]=="si"){
            $mensaje=$cEliminar->eliminarProfesor($idProfesor);
        }else{
            $mensaje = "operación cancelada";
        }
        //Llamamos a panel_Gestion_Prof.php y actualizamos los profesores.
        $profesores=$cEliminar->listarProfesores();
        echo $mensaje;
        include "vistas/panel_Gestion_Prof.php";

    }else{ /*Significa que es la primera vuelta, que le acabamos de dar a eliminar en panel_Gestion_Prof.php*/
        $resultado=$profesor=$cEliminar->sacarProfesor($idProfesor);
        $profesor=$resultado->fetch_assoc();
        include "vistas/eliminar.php";
    }

?>