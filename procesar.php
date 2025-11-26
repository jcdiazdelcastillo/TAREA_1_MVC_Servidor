<?php
    $idProfesor = $_GET['idProfesor'];

    if($_GET['accion']=="eliminar"){
        //eliminar
        header("location: ./vistas/eliminar.php?idProfesor=".$idProfesor);
    }else{
        //modificar
        header("location: ./vistas/modificar.php?idProfesor=".$idProfesor);
    }
?>