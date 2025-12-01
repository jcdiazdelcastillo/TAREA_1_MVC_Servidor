<?php
    include "controlador/profesorControlador.php";
    $cAlta = new ProfesorControlador();
    $cAlta->insertarProfesor();
    include "vistas/altaProfesores.php";
?>