<?php
    include "controlador/profesorControlador.php";
 
    $cEliminar = new ProfesorControlador();
    $nombre = $cEliminar->sacarProfesor();
    $cEliminar->eliminarProfesor();
    include "vistas/eliminar.php";

?>