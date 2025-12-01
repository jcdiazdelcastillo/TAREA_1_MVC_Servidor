<?php
    include "controlador/profesorControlador.php";

    $cListar = new ProfesorControlador();
    $profesores=$cListar->listarProfesores();
    include "vistas/panel_Gestion_Prof.php";
?>